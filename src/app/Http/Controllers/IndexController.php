<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index() {
        $data = [
            "name"=>"hello",
        ];

        return view('welcome', $data);
    }
}
