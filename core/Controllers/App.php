<?php

namespace Core\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class App extends Controller
{
    public function index()
    {
        return view('core::core')->with(
            [
                'name' => 'Kousar Rahman'
            ]
        );
    }
}
