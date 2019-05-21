@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4 p-5 text-center">
            <img class="rounded-circle" src="https://scontent-mxp1-1.cdninstagram.com/vp/064782acafa7790980f717001a26d037/5D9798F4/t51.2885-19/s150x150/16788520_861858183956846_4282834855202390016_a.jpg?_nc_ht=scontent-mxp1-1.cdninstagram.com" alt="">
        </div>
        <div class="col-md-8 p-5">
            <div class="d-flex justify-content-between align-items-baseline"> <h1>{{ $user->username }}</h1> 
            <a href="{{ url('/p/create') }}">Add new Post</a>
            </div>
            <div class="d-flex">
                <p class="pr-3"><strong>511</strong> posts</p>
                <p class="pr-3"><strong>56.6K</strong> followers</p>
                <p class="pr-3"><strong>86</strong> following</p>
            </div>
            <div>
                <h4>{{ $user->profile->title }}</h4>
            <p> {{ $user->profile->description }} </p>
        </div>
        <a href="{{ $user->profile->url }}" target="_blank">{{ $user->profile->url }}</a>
        </div>
    </div>

      
<div class="row pt-5">
            @foreach ($user->posts as $post)    
            <div class="col-4">      
                <img src="/storage/{{ $post->image }}" class="w-100"> 
            </div>
         @endforeach
    </div>
</div>
@endsection
