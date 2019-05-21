@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-8 offset-2">
                <h2>Create a New Post</h2>
                @include('shared.errors')
                <form action="/p" method="POST" enctype="multipart/form-data"> 
                    @csrf
            <div class="form-group row">
                <label for="name" class="col-md-4 col-form-label">Caption</label>

                    <div class="col-md-10">
                        <input id="name" type="text" class="form-control" name="caption" value="{{ old('caption') }}" autocomplete="name" autofocus>
                </div>
            </div>
            <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label">Image</label>
    
                        <div class="col-md-10">
                            <input id="image" type="file" name="image" value="{{ old('image') }}">
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
