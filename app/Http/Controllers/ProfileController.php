<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ProfileController extends Controller
{
    public function index($id) {

        $user = User::findOrFail($id);
        return view('profile.index', compact('user')); 
    }
}