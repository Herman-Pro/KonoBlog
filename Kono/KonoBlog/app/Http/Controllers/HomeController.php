<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function aboutUs()
    {
        return view('about_us');
    }
    
    public function categorie()
    {
        return view('categorie');
    }
    
    public function contact()
    {
        return view('contact');
    }
    
    public function categoriesNewsChosen()
    {
        return view('categories-news-choisen');
    }

    public function newsTitle()
    {
        return view('news-title');
    }
}
