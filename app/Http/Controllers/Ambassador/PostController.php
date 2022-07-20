<?php
 
namespace App\Http\Controllers\Ambassador;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\PostAssets;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function fetch(Request $request){
        $posts = Post::where('user_id', $request->user)->orderBy('created_at', 'DESC')->skip($request->n*2)->take(2)->get();
        $user=User::find($request->user);
        $viewRender = view('ambassador.profile.components.partial.posts_html',compact('posts','user'))->render();
        return response()->json($viewRender);
    }


    public function fetch_all(Request $request){

        $type=$request->type;
        $tier_0=auth()->user()->tier_0();
        ($tier_0!=null)? ($tier0=$tier_0->id) : $tier0=null;
        $network=auth()->user()->my_network();
        $network[]=$tier0;
        $network[]=auth()->user()->id;

        $take=($request->n == 0)?10:5;
        $skip=($request->n == 0)?($request->n*$take):($request->n*$take)+1;

        $posts = Post::orderBy('created_at', 'DESC')->whereIn('user_id',$network)->skip($skip)->take($take)->get();
        if ($type=='all'){
            $posts = Post::orderBy('created_at', 'DESC')->whereIn('user_id',$network)->skip($skip)->take($take)->get();
        }
        if ($type=='friends'){
            
            $friends=getArrayFromKeyofEloquent(getFriendsListUsers(auth()->user()->id),'id');
            $posts = Post::orderBy('created_at', 'DESC')->whereIn('privacy',['public','friends'])->whereIn('user_id',$friends)->skip($skip)->take($take)->get();
        }
        if ($type=='connections'){
            $connections=getArrayFromKeyofEloquent(getConnectionsListUsers(auth()->user()->id),'id');
            $posts = Post::orderBy('created_at', 'DESC')->whereIn('privacy',['public','connections'])->whereIn('user_id',$connections)->skip($skip)->take($take)->get();
        }
        if ($type=='tier-1'){
           
            $tier1=getArrayFromKeyofEloquent(auth()->user()->tier_1(),'id');
            $posts = Post::orderBy('created_at', 'DESC')->whereIn('privacy',['public','tier-1'])->whereIn('user_id',$tier1)->skip($skip)->take($take)->get();
        } 
        if ($type=='tier-2'){
           
            $tier2=getArrayFromKeyofEloquent(auth()->user()->tier_2(),'id');
            $posts = Post::orderBy('created_at', 'DESC')->whereIn('privacy',['public','tier-2'])->whereIn('user_id',$tier2)->skip($skip)->take($take)->get();
        }

        $user=User::find($request->user);
        $viewRender = view('ambassador.profile.components.partial.posts_html',compact('posts','user'))->render();

        $show_more=false;
        if ($posts->count()<$take){
            $show_more=false;
        }else{
            $show_more=true;
        }
        return response()->json(['html'=>$viewRender,'show_more'=>$show_more]);
    }
    public function store(Request $request){
        if ($request->file_type){
            $postAsset=new PostAssets();
            if ($request->file_type=='link'){
                $this->validate($request,[
                    'url'=>'required',
                ]);
                $postAsset->file=$request->url;
            }else{
                if ($request->file_type=='audio'){
                    $this->validate($request,[
                        'attachment'=>'required',
                    ]);
                }
                if ($request->file_type=='image'){
                    $this->validate($request,[
                        'attachment'=>'required|mimes:jpeg,jpg,png,gif',
                    ]);
                }
                if ($request->file_type=='video'){
                    $this->validate($request,[
                        'attachment'=>'required',
                    ]);
                }
                $attachment = time() . $request->attachment->getClientOriginalName();
                Storage::disk('local')->put('/public/a/posts/' . $attachment, File::get($request->attachment));
                $postAsset->file=$attachment;
            }
            $postAsset->type=$request->file_type;
        }else{
            $this->validate($request,[
                'details'=>'required',
            ]);
        }
        $this->validate($request,[
            'privacy'=>'required'
        ]);

        $post= new Post();
        $post->user_id=auth()->user()->id;
        $post->details=$request->details;
        $post->privacy=$request->privacy;
        $post->save();
        if ($request->file_type){
            $postAsset->post_id=$post->id;
            $postAsset->save();
        }


        $posts = Post::where('id',$post->id)->get();
        $user=User::find($post->user_id);
        $viewRender = view('ambassador.profile.components.partial.posts_html',compact('posts','user'))->render();

        return response()->json(['success'=>'Post added successfully','html'=>$viewRender]);
    }
    public function update(Request $request){
        $post= Post::find($request->id);

        if ($request->file_type){
            $postAsset=new PostAssets();
            if ($request->file_type=='link'){
                $this->validate($request,[
                    'url'=>'required',
                ]);
                $postAsset->file=$request->url;
            }else{
                if ($request->file_type=='audio'){
                    $this->validate($request,[
                        'attachment'=>'required',
                    ]);
                }
                if ($request->file_type=='image'){
                    $this->validate($request,[
                        'attachment'=>'required|mimes:jpeg,jpg,png,gif',
                    ]);
                }
                if ($request->file_type=='video'){
                    $this->validate($request,[
                        'attachment'=>'required',
                    ]);
                }
                $attachment = time() . $request->attachment->getClientOriginalName();
                Storage::disk('local')->put('/public/a/posts/' . $attachment, File::get($request->attachment));
                $postAsset->file=$attachment;
            }
            $postAsset->type=$request->file_type;
        }else{
            if (!$post->assets()->exists()){
                $this->validate($request,[
                    'details'=>'required',
                ]);
            }

        }

        $this->validate($request,[
            'privacy'=>'required'
        ]);

        $post->details=$request->details;
        $post->privacy=$request->privacy;
        $post->save();
        if ($request->file_type){
            $postAsset->post_id=$post->id; 
            $postAsset->save();
        }


        $posts = Post::where('id',$post->id)->get();
        $user=User::find($post->user_id);
        $viewRender = view('ambassador.profile.components.partial.posts_html',compact('posts','user'))->render();

        return response()->json(['success'=>'Post updated successfully','html'=>$viewRender]);
    }
    public function destroy(Request $request){
        $post=Post::find($request->id);
        $post->comments()->delete();
        $post->likes()->delete();
        $post->assets->delete();
        $post->delete();
        return response()->json(['success'=>'Deleted']);
    }
    public function asset_destroy(Request $request){
        $asset=PostAssets::find($request->id);
        if ($asset->type!='link'){
            Storage::disk('local')->delete('/public/a/posts/' . $asset->file);
        }
        $asset->delete();
        return response()->json(['success'=>'Deleted']);
    }
    public function popup(Request $request){
        $post=Post::find($request->id);
        $viewRender = view('ambassador.profile.components.partial.post_popup_html',compact('post'))->render();
        return response()->json($viewRender);
    }
} 