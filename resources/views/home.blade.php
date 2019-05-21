@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4 p-5 text-center">
            <img class="rounded-circle" src="https://scontent-mxp1-1.cdninstagram.com/vp/064782acafa7790980f717001a26d037/5D9798F4/t51.2885-19/s150x150/16788520_861858183956846_4282834855202390016_a.jpg?_nc_ht=scontent-mxp1-1.cdninstagram.com" alt="">
        </div>
        <div class="col-md-8 p-5">
            <div class="d-flex justify-content-between align-items-baseline"> <h1>{{ $user->username }}</h1> 
            <a href="#">Add new Post</a>
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
    <div class="row">
        <div class="col-md-4"> 
            <img class="w-100" src="https://scontent-mxp1-1.cdninstagram.com/vp/d07fd61936e4accaf7f27c3e11084852/5D67D4FF/t51.2885-15/sh0.08/e35/s640x640/42674287_270463157136352_9035090198971361800_n.jpg?_nc_ht=scontent-mxp1-1.cdninstagram.com" alt=""> </div>
        <div class="col-md-4">
                <img class="w-100" src="https://scontent-mxp1-1.cdninstagram.com/vp/9d1c01a6926511e33a8a1628d3036075/5D5E1B87/t51.2885-15/sh0.08/e35/c12.0.1056.1056a/s640x640/39961349_265095034114120_2357298053961621124_n.jpg?_nc_ht=scontent-mxp1-1.cdninstagram.com" alt="">     
        </div>
        <div class="col-md-4">
                <img class="w-100" src="https://scontent-mxp1-1.cdninstagram.com/vp/47fef2cf15ff4906ecec4fd858f7c479/5D6D453A/t51.2885-15/e35/c0.61.495.495a/23667663_1802544363120240_2370678044512747520_n.jpg?_nc_ht=scontent-mxp1-1.cdninstagram.com" alt="">     

        </div>
    </div>
</div>
@endsection
