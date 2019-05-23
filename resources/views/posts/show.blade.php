@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row pt-5">
  <div class="col-8 pl-3 text-center">
      <img src="/storage/{{$post->image }}" alt="" class="w-100">
  </div>
  <div class="col-4">
    <div class="d-flex align-items-center">
      <div class="pr-3"> 
      <img src="/storage/{{$post->user->profile->image }}" style="max-width:40px;" class="rounded-circle">
    </div>
      <div class="font-weight-bold"> <a href="/profile/{{ $post->user->id }}"> <span class="text-dark"> {{ $post->user->username }} </span> </a></div>  
    <div class="ml-5"><a href="#">Follow</a></div>
    </div>
    <hr>
    <div class="font-weight-bold"> <a href="/profile/{{ $post->user->id }}"><span class="text-dark"> {{ $post->caption }} </span></a></div>
  </div>
</div>
</div>
@endsection
