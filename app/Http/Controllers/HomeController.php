<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return $this->titi;
        return Article::all();
    }
}
