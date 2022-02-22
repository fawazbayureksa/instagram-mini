
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Upload Foto</div>
                <div class="card-body text-center">

                      <form method="POST" action="/post/edit" enctype="multipart/form-data">
                        @csrf
                       
                        {{-- Diambil dari components/input --}}

                        <x-fotoupload label="Foto" name="image" />
                        <x-textarea label="Caption" name="caption"/>
                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                   Upload
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
