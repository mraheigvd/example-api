<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class HealthController extends Controller
{
    public function index()
    {
        return Article::all();
    }
}
