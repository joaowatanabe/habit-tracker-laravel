<?php

namespace App\Http\Controllers;

class SiteController extends Controller
{
    // GET
    public function index()
    {
        $name = 'João Vicente';
        $habits = [
            'Exercise',
            'Read a book',
            'Meditate',
            'Drink water',
            'Travel',
        ];
        return view('home', [
            'name' => $name,
            'habits' => $habits,
        ]);
    }
}
