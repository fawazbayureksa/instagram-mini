<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //

    public function show($username){

        $userpost = User::where('username',$username)->first();
        if(!$userpost) abort(404);
            // dd($userpost);
        $user = Auth::user();
        $post = Post::all();
        return view('user.profil',compact('userpost','user','post'));

    }

    public function edit(){
        $user = Auth::user();
        return view('user.edit',compact('user'));
    }
    public function update(Request $request){
        $user = Auth::user();

        $request->validate([
            'username' => 'required|alpha_dash|min:3|max:15|unique:users,username,'.$user->id,
            'fullname' => 'max:30',
            'bio' => 'max:144',
            'avatar' => 'image|mimes:jpeg,jpg,png'
        ]);
        
        $imageName = $user->avatar;
        
        // Jika ada request avatar untuk di ubah/diganti
        if ($request->foto)
        {   
            // maka mengambil nama avatar nya dari request->avatar
            $avatar_img = $request->foto;
            // memberi nama ke file avatar
            $imageName = $user->username.'-'.time().'.'.$avatar_img->extension();
            // menentukan lokasi upload file 
            $avatar_img->move(public_path('images/avatar'),$imageName);
        }
        $user->update([
            'username' => $request->username,
            'fullname' => $request->fullname,
            'bio' => $request->bio,
            'avatar' => $imageName

        ]);

        return redirect('/home');
    }

    public function follow($following_id){


        $user = Auth::user();

        // dd($user->following);

        // Cek Apakah sudah di follow atau belum
        if ($user->following->contains($following_id)){

            $user->following()->detach($following_id);
            $message = ['status' => 'Unfollow'];
        }
        else{

            $user->following()->attach($following_id);
            $message = ['status' => 'Follow'];
        }

        return response()->json($message);
        
    }
}
