@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-3">
                    <x-avatar :user="$userpost" />
                </div>
                <div class="col-md-8 pt-3 mb-3">
                    <h3 class="mx-5">{{$userpost->username}}</h3>
                    <div class="mx-3 d-flex justify-content-around">
                        <p>Kiriman 0</p>
                        <p>Pengikut 0</p>
                        <p>Diikuti 0</p>
                    </div>
                    <div>
                        <p class="mx-5">{{$user->fullname}} <br> {{$user->bio}}</p>
                    </div>
                </div>
               <hr>
               <div class="row">
                   @foreach ($post as $key)
                   <div class="col-md-4">
                       <img class="img-responsive mb-3" width="100%" 
                       src={{asset('images/posts/'.$key->image)}} 
                       alt="Foto Postingan {{Auth::user()->fullname}}">
                       <a href=""></a>
                    </div>
                    @endforeach
               </div>
                 
            </div>

        </div>
    </div>
</div>
@endsection
