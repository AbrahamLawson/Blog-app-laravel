<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function __invoke()
    {
        // TODO: Implement __invoke() method.
        $posts = auth()->user()->posts;

        return view('dashboard', compact('posts'));
    }
}
