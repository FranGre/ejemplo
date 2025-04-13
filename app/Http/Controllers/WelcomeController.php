<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Film;

class WelcomeController extends Controller
{
    public function __invoke()
    {
        $films = Film::count();
        $users = User::count();

        return view('welcome', ['films' => $films, 'users' => $users]);
    }
}
