<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function create(Request $request)
    {
        return view('auth/create');
    }
}
