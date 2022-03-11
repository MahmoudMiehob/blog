<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ProfileController extends Controller {

    public function index(User $user){
        return view('profile.show',['user' => auth()->user()]);
    }
}
