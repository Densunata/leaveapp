<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class LayoutController extends Controller
{
    public function index()
    {
        return view('dashboard.index');
    }
}
