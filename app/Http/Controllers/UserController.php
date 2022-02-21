<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //

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
}
