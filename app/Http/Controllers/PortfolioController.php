<?php

namespace App\Http\Controllers;

use App\Models\User;

class PortfolioController extends Controller
{
    public function index()
{
    $user = User::with([
        'profile',
        'skills',
        'experiences',
        'contacts',
        'projects'
    ])->first();

    return view('portfolio', compact('user'));
}
}