@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Edit Profil {{$user->username}}</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        {{-- Diambil dari components/input --}}
                      <x-input name="username" label="Username" type="text" value="{{$user->username}}"/>
                      <x-input name="email" label="Alamat E-mail" type="email" value="{{$user->email}}" />
                      <x-input name="bio" label="Biodata" type="text" value="{{$user->bio}}" />
                   


                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                   Simpan
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
