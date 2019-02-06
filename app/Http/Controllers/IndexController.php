<?php

namespace App\Http\Controllers;

class IndexController
{
    /**
     * Method to show documentation
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $home = true;
        return view('index.index', compact('home'));
    }
}