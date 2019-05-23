@extends('layouts.app')

@section('content')
<div class="container">
        @foreach ($posts as $post)
    <div class="row">
        <div class="col-6 offset-3">
            <a href="/profile/{{ $post->user->id }}"> 
                <img class="w-100 py-5" src="/storage/{{ $post->image }}" alt="">
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-6 offset-3">
           <a href="/profile/{{ $post->user->id }}"> 
               <h4> <span class="text-dark"> {{ $post->caption }} </span></h4>
            </a>
           
        </div>
    </div>
    @endforeach
        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                    {{ $posts->links() }}
            </div>
        </div>
</div>
@endsection
