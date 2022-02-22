@php

    // jika ada foto maka tampilkan foto jika tidak tampikan ui avatar inisial dari username
    $avatar_url = ($user->avatar) ? asset('images/avatar/'.Auth::user()->avatar) 
    : "https://ui-avatars.com/api/?size=32&name=".$user->username;
@endphp

<img class="rounded-circle mb-3" width="32" height="32" src="{{$avatar_url}}" alt="Foro profil {{Auth::user()->fullname}}">

