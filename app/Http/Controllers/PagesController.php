<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function Home()
    {
        $tasks = [
            'Go to the store',
            'Go to the market',
            'Go to work',
            'Go to the concert'
        ];

        return view('welcome', [
            'tasks' => $tasks,
            'foo' => 'Laravel'
        ]);
    }

    public function About()
    {
        return View('about');
    }

    public function Contact()
    {
        return View('contact');
    }
}
