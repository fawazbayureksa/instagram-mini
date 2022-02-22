@php

    // jika ada foto maka tampilkan foto jika tidak tampikan ui avatar inisial dari username
    $avatar_url = ($user->avatar) ? asset('images/avatar/'.Auth::user()->avatar) 
    : "https://ui-avatars.com/api/?name=".$user->username;
@endphp

<img class="mb-3" width="" height="64" src="{{$avatar_url}}" alt="Foro profil {{Auth::user()->fullname}}">

