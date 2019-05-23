@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-8 offset-2">
                <h2>Edit Profile</h2>
                @include('shared.errors')
                <form action="/profile/{{$user->id}}" method="POST" enctype="multipart/form-data"> 
                    @csrf
                    {{method_field('PUT')}}
            <div class="form-group row">
                <label for="title" class="col-md-4 col-form-label">Title</label>
                <div class="col-md-10">
                    <input id="title" type="text" class="form-control" name="title" value="{{ $user->profile->title }}" autocomplete="title" autofocus>
                </div>
            </div>
            <div class="form-group row">
                    <label for="description" class="col-md-4 col-form-label">Description</label>
                        <div class="col-md-10">
                            <input id="description" type="text" class="form-control" name="description" value="{{ $user->profile->description }}" autocomplete="title" autofocus>
                         </div>
            </div>
            <div class="form-group row">
                    <label for="usl" class="col-md-4 col-form-label">URl</label>
    
                        <div class="col-md-10">
                            <input id="url" type="text" class="form-control" name="url" value="{{ $user->profile->url }}" autocomplete="url" autofocus>
                    </div>
            </div>
            <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label">Image</label>
                    <div class="col-md-10">
                        <input id="image" type="file" name="image" value="{{ old('image') ?? $user->profile->image }}">
                    </div>
            </div>
                <div class="form-group row">
                <input id="name" type="submit" class="btn btn-primary ml-3">
            </div>
        </form>
        </div>
    </div>
</div>
@endsection
