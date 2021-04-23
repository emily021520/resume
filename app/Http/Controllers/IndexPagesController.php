<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexPagesController extends Controller
{
    
    public function index()
    {
        return view('index_pages/index');
    }
}
