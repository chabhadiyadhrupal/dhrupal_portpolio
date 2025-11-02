<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        $user = (object)[
            'profile_photo' => 'images/about.jpg' // storage/app/public/images/about.jpg
        ];

        return view('welcome', compact('user'));
    }
}
