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
                   <div class="mx-2">
                       <x-fotoprofil :user="$user"/>
                   </div>
                   <div class="mx-2">
                       <x-fotoprofil :user="$user"/>
                   </div>

                  </div>
                </div>
            </div>
            <div class="card mb-2">
                <div class="card-body">
                    <h3>POST</h3>
                </div>
            </div>
            <div class="card mb-2">
                <div class="card-body">
                    <h3>POST 2</h3>
                </div>
            </div>
            <div class="card mb-2">
                <div class="card-body">
                    <h3>POST 3</h3>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    
                    <div class="d-flex align-items-center">
                        <div>
                            <x-fotoprofil :user="$user"/>
                        </div>
                        <a href="#" class="text-decoration-none text-black mx-3">
                            <h5>{{Auth::user()->username}}</h5>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
