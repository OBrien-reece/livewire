<?php

namespace App\Http\Controllers;

use App\Models\Director;
use App\Models\Movie;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $directors = Director::all();
        $movies = Movie::all();

        return view('home', [
            'directors' => $directors,
            'movies' => $movies
        ]);
    }
}
