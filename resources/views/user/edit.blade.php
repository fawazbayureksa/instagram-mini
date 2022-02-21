


@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Edit Profil {{$user->username}}</div>
                <div class="card-body text-center">

                      <x-avatar :user="$user"/>
                      
                      <form method="POST" action="/user/edit" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        {{-- Diambil dari components/input --}}
                      <x-input name="fullname" label="Full Name" type="text" value="{{$user->fullname}}" />
                      <x-input name="username" label="Username" type="text" value="{{$user->username}}"/>
                      <x-input name="bio" label="Biodata" type="text" value="{{$user->bio}}"/>

                        <div class="form-group row">
                            <label for="" class="col-md-4 col-form-label text-md-end">Foto Profil</label>
                            <div class="col-md-6">
                                <input type="file" name="foto" id="foto" class="form-control mb-3">
                            </div>
                        
                            @error('foto')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>                        
                            @enderror

                        </div>
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
