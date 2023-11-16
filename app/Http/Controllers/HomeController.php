<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Magazine;


class HomeController extends Controller
{
    public function Index()
    {
        $files = Magazine::latest()->first();

        return view('home.index', ['files' => $files]);
    }

    public function About()
    {
        return view('home.about');
    }

    public function ContactUsView()
    {
        return view('home.contactus');
    }
}
