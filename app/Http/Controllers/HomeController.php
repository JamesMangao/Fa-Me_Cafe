<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $drinkSections = config('menu.drinks', []);
        $foodSections = config('menu.food', []);
        $reviews = config('reviews', []);

        return view('home', compact('drinkSections', 'foodSections', 'reviews'));
    }
}
