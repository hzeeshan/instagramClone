@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4 p-5 text-center">
            <img class="rounded-circle w-100" src="{{ $user->profile->profileImage() }}" >
        </div>
        <div class="col-md-8 p-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <div class="d-flex">  
                 <div class="h4">{{ $user->username }}</div>
                     <follow-button user-id="{{ $user->id }}" follows="{{ $follows }}"></follow-button>
                </div>
            @can('update', $user->profile)
            <a href="{{ url('/p/create') }}">Add new Post</a>                
            @endcan
            </div>
            <div class="d-flex pt-3">
                <p class="pr-3"><strong>511</strong> posts</p>
                <p class="pr-3"><strong>{{ $user->profile->followers->count() }}</strong> followers</p>
                <p class="pr-3"><strong>{{ $user->following->count() }}</strong> following</p>
            </div>
            @can('update', $user->profile)
            <div class="pb-2"> <a href="/profile/{{$user->id}}/edit">Edit Profile</a> </div>
            @endcan
            <div>
            <h4>{{ $user->profile->title }}</h4>
            <p>{{ $user->profile->description }}</p>
        </div>
        <a href="{{ $user->profile->url }}" target="_blank">{{ $user->profile->url }}</a>
        </div>
    </div>
   
<div class="row pt-5">
            @foreach ($user->posts as $post)    
            <div class="col-4 pb-4">
                <a href="/p/{{$post->id}}">       
                    <img src="/storage/{{ $post->image }}" class="w-100"> 
                </a>
            </div>
         @endforeach
</div>
</div>
@endsection
