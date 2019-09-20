<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IMMController extends Controller
{
    public function index()
    {
        return view('contents.imm-dashboard');
    }
}
