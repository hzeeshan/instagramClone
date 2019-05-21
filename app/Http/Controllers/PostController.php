<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function create() {

        return view('posts.create');
    }

    public function store() {

       $data = request()->validate([
            'caption' => 'required',
            'image' => ['required','image'],
        ]);


        $imagePath = request('image')->store('uploads', 'public');

        auth()->user()->posts()->create([
            'caption' => $data['caption'],
            'image' => $imagePath
        ]);

        return redirect('/profile/'.auth()->user()->id);
    }
}
