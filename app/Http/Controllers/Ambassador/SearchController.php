<?php

namespace App\Http\Controllers\Ambassador;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $this->validate($request, [
            'key' => 'required'
        ]);
        $key = $request->key;
        return view('ambassador.search.index', compact('key'));
    }

    public function fetch(Request $request)
    {
        $key = $request->key;
        $role_slug = Role::where('slug', 'ambassador')->first();
        $role_slug = $role_slug->id;

        $results = User::where('id', '!=', auth()->user()->id)->where('role', $role_slug)
            ->whereRaw('( fname LIKE "%' . $key . '%" or lname LIKE "%' . $key . '%" or concat(fname," ",lname) LIKE "%' . $key . '%" )')->get();

        $friends = getArrayFromKeyofEloquent(getFriendsListUsers(auth()->user()->id), 'id');
        $connections = getArrayFromKeyofEloquent(getConnectionsListUsers(auth()->user()->id), 'id');

        $viewRender = view('ambassador.search.components.search_html', compact('results', 'friends', 'connections'))->render();

        return response()->json($viewRender);
    }

    public function fetch_dropdown(Request $request)
    {
        $key = $request->key;
        $role_slug = Role::where('slug', 'ambassador')->first();
        $role_slug = $role_slug->id;

        $results = User::where('id', '!=', auth()->user()->id)->where('role', $role_slug)
            ->whereRaw('( fname LIKE "%' . $key . '%" or lname LIKE "%' . $key . '%" or concat(fname," ",lname) LIKE "%' . $key . '%" )')->get();

        $html='';
        foreach ($results as $user) {
            $html .= '<li class="recent-search-li">
                        <div class="recent-search-list-div">
                            <div class="recent-search-list-inner">
                                <div class="recent-search-rofile">
                                    <div class="profile-image">
                                        <img src="'.$user->profile_image().'" alt="">
                                    </div>
                                    <div class="profile-text">
                                        <a href="'.url('profile-view/'.$user->username).'">'.$user->fullName().'</a>
                                    </div>
                                </div>
                                <!--<div class="remove-div">
                                    <span class="ti-close"></span>
                                </div>-->
                            </div>
                        </div>
                    </li>';
        }
        return response()->json($html);
    }

}
