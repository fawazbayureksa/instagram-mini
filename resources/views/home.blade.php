@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card mb-3">
                <div class="card-body "  style="overflow-x: auto;overflow-x:scroll">
                   <div class="d-flex  align-items-center mx-3">
                   <div class="mx-2">
                       <x-fotoprofil :user="$user"/>
                   </div>
                   <div class="mx-2">
                       <x-fotoprofil :user="$user"/>
                   </div>
                   <div class="mx-2">
                       <x-fotoprofil :user="$user"/>
                   </div>
                   <div class="mx-2">
                       <x-fotoprofil :user="$user"/>
                   </div>

                  </div>
                </div>
            </div>
            @foreach ($post as $key)
            <div class="card mb-3">
                <div class="card-body ">
                   <div class="d-flex align-items-center">
                       <x-fotonav :user="$user" />
                        <p class="mx-2">fawazbayureksa_</p>
                   </div>

                   <div class="text-center">
                       <img class="img-responsive mb-3" width="100%" 
                       src={{asset('images/posts/'.$key->image)}} 
                       alt="Foto Postingan {{Auth::user()->fullname}}">
                    </div>
                   <p class="mx-5">{{$key->caption}}</p>
                </div>
            </div>
            @endforeach
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div>
                            <x-fotoprofil :user="$user"/>
                        </div>
                        <a href="/{{'@'.Auth::user()->username}}" class="text-decoration-none text-black mx-3">
                            <h5>{{Auth::user()->username}}</h5>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
