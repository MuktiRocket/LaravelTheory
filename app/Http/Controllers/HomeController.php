<?php

namespace App\Http\Controllers;

use App\user;
use App\role;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $role = user::find(2)->role;
        $user = role::find(2)->user;
        return view('welcome', ['user' => $user]);
    }
}
composer create-project --prefer-dist laravel/laravel todo_list "5.6.*"


