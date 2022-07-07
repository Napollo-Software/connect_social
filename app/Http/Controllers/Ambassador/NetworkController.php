<?php

namespace App\Http\Controllers\Ambassador;

use App\Http\Controllers\Controller;
use App\Models\AmbassadorDetails;
use App\Models\Connection;
use App\Models\Friend;
use App\Models\User;
use Illuminate\Http\Request;
use Mockery\Exception;

class NetworkController extends Controller
{
    public function network($id, $type)
    {

        $user = User::find($id);
        $repeated_html = '<div class="friend-grid-col-options-dropdown-inner">
            <div class="friend-grid-col-options-dropdown-main">
                <ul class="friend-grid-col-options-dropdown-ul">';
        if ($type == 'friends' or $type == 'connections') {
            $repeated_html .= '<li class="friend-grid-col-options-dropdown-li network-dropdown-option-in-options">
                                <a href="javascript:void(0)" class="friend-grid-col-options-dropdown-link remove-' . $type . '">Remove ' . ucfirst($type) . '</a>
                            </li>';
        }

        $repeated_html .= '<li class="friend-grid-col-options-dropdown-li">
                        <a href="' . url('chat') . '" class="friend-grid-col-options-dropdown-link">Send Message</a>
                    </li>
                </ul>
            </div>
        </div>';
        return view('ambassador.profile.network.network', compact('type', 'user', 'repeated_html'));
    }

    public function index($type, $id = null)
    {
        if ($id) {
            $user = User::find($id);
        } else {
            $id = auth()->user()->id;
            $user = User::find($id);
        }


        $reflection = new \ReflectionClass('Privacy');

        $repeated_html = '<div class="friend-grid-col-options-dropdown-inner">
            <div class="friend-grid-col-options-dropdown-main">
                <ul class="friend-grid-col-options-dropdown-ul">';
        if ($type == 'friends' or $type == 'connection') {
            $repeated_html .= '<li class="friend-grid-col-options-dropdown-li network-dropdown-option-in-options">
                                <a href="javascript:void(0)" class="friend-grid-col-options-dropdown-link remove-' . $type . '">Remove ' . ucfirst($type) . '</a>
                            </li>';
        }

        $repeated_html .= '<li class="friend-grid-col-options-dropdown-li">
                        <a href="' . url('chat') . '" class="friend-grid-col-options-dropdown-link">Send Message</a>
                    </li>
                </ul>
            </div>
        </div>';

        return view('ambassador.profile.network', compact('type', 'user', 'repeated_html', 'reflection'));
    }

    public function fetch(Request $request)
    {
        $type = $request->type;
        $id = $request->user;
        $user = User::find($id);
        $data = [];
        $html = '';
        if ($user->id == auth()->user()->id) {
            $showRemove = true;
        } else {
            $showRemove = false;
        }
        if ($type == 'friends') {
            $privacy = unserialize($user->details->network_privacy);
            $data = [];
            dd(checkPrivacyInNetwork($privacy[$type], $id));
            if (checkPrivacyInNetwork($privacy[$type], $id)) {
                $data = getFriendsListUsers($id);
            }
            dd($data);
        }
        if ($type == 'connections') {
            $data = [];
            $privacy = unserialize($user->details->network_privacy);
            if (checkPrivacyInNetwork($privacy[$type], $id)) {
                $data = getConnectionsListUsers($id);
            }
        }
        if ($type == 'tier-1') {
            $data = $user->tier_1();
        }
        if ($type == 'tier-2') {
            $data = $user->tier_2();
        }
        foreach ($data as $detail) {
                $html .= '<div class="friend-grid-col">
                <div class="friend-grid-col-inner-div">
                    <div class="friend-grid-col-profile">
                        <div class="friend-grid-col-profile-inner">
                            <div class="friend-grid-col-profile-image">
                                <img src="' . $detail->profile_image() . '" alt="">
                            </div>
                            <div class="friend-grid-col-profile-text">
                                <div class="friend-grid-col-profile-text-top">
                                    <a href="' . url('profile-view/' . $detail->id) . '" class="text-decoration-none text-secondary">' . $detail->fullName() . '</a>
                                </div>
                                <div class="friend-grid-col-profile-text-bottom">
                                    ' . ucfirst($type) . '
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="friend-grid-col-options">
                        <div class="friend-grid-col-options-inner">
                            <div class="friend-grid-col-options-icon">
                                <span class="ti-more-alt"></span>
                                <div class="friend-grid-col-options-dropdown" data-id="' . $detail->id . '">
                                
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>';

        }
        $repeated_html = '<div class="friend-grid-col-options-dropdown-inner">
            <div class="friend-grid-col-options-dropdown-main">
                <ul class="friend-grid-col-options-dropdown-ul">';

        if ($showRemove) {
            if ($type == 'friends' or $type == 'connections') {
                $repeated_html .= '<li class="friend-grid-col-options-dropdown-li network-dropdown-option-in-options">
                        <a href="javascript:void(0)" class="friend-grid-col-options-dropdown-link remove-' . $type . '">Remove ' . ucfirst($type) . '</a>
                    </li>';
            }
        }

        $repeated_html .= '            <li class="friend-grid-col-options-dropdown-li">
                        <a href="' . url('chat') . '" class="friend-grid-col-options-dropdown-link">Send Message</a>
                    </li>
                </ul>
            </div>
        </div>';

        if ($user->id == auth()->user()->id) {
            if (in_array($type, ['friends', 'connections'])) {
                $show_privacy = true;
                $privacies = getNetworkPrivacy($type);
            } else {
                $show_privacy = false;
                $privacies = [];
            }
        }else{
            $show_privacy = false;
            $privacies = [];
        }
        $p = [
            'show_privacy' => $show_privacy,
            'privacy' => $privacies,
        ];
        return response()->json(['repeated_html' => $repeated_html, 'html' => $html, 'p' => $p]);

    }

    public function change_privacy(Request $request)
    {
        $data = unserialize(auth()->user()->details->network_privacy);
        foreach (unserialize(auth()->user()->details->network_privacy) as $key => $value) {
            if ($key == $request->type) {
                $data[$key] = $request->privacy;
            }
        }
        $userDetails = AmbassadorDetails::find(auth()->user()->details->id);
        $userDetails->network_privacy = serialize($data);
        $userDetails->save();
        $d = [
            'name' => getPrivacyDetails($request->privacy)['name'],
            'url' => getPrivacyDetails($request->privacy)['url'],
        ];
        return response()->json(['success' => 'updated', 'data' => $d]);

    }
}
