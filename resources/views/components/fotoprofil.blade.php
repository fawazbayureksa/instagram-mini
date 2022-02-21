@php

    // jika ada foto maka tampilkan foto jika tidak tampikan ui avatar inisial dari username
    $avatar_url = ($user->avatar) ? asset('images/avatar/'.Auth::user()->avatar) 
    : "https://ui-avatars.com/api/?size=64&name=".$user->username;
@endphp

<img class="rounded-circle mb-3" width="64" height="64" src="{{$avatar_url}}" alt="Foro profil {{Auth::user()->fullname}}">

