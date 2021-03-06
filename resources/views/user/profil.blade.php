@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="row">
                <div class="col-md-3">
                    <x-avatar :user="$userpost" />
                </div>
                <div class="col-md-8 pt-3 mb-3">
                    <div class="d-flex align-items-center my-3">
                        <h3 class="ms-5 me-2">{{$userpost->username}}</h3>

                        {{-- Jika user login berada di profil sendiri tombol follow tidak ada , sebaliknya --}}
                        @if (Auth::user()->id == $userpost->id)

                        @else
                            <button
                                class="
                                {{Auth::user()->following->contains($userpost->id) ? 'btn btn-outline-dark' : 'btn btn-primary'}}
                                     btn-md rounded"
                                
                                onclick="follow({{$userpost->id}}, this)">
                                {{-- jika sudah di follow maka akan tertulis unfollow , sebaliknya --}}
                                {{Auth::user()->following->contains($userpost->id) ? 'Berhenti Mengikuti' : 'Ikuti'}}
                            </button> 
                        @endif

                        <script>
                            function follow(id,el)
                            {
                                fetch('/follow/' + id)
                                    .then(response => response.json())
                                    .then(data => {
                                        el.innerText = (data.status == 'Follow') ? 'Berhenti Mengikuti' : 'Ikuti' 
                                    });
                            }
                        </script>

                    </div>
                    <div class="mx-3 d-flex justify-content-around">
                        <p>Kiriman 0</p>
                        <p>Pengikut 3</p>
                        <p>Diikuti 2</p>
                    </div>
                    <div>
                        <p class="mx-5">{{$user->fullname}} <br> {{$user->bio}}</p>
                    </div>
                </div>
               <hr>
               <div class="row">
                   @foreach ($post as $key)
                   <div class="col-md-4">
                       <img class="img-responsive mb-3" width="100%" height="100%"
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
