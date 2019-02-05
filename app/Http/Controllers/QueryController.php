<?php

namespace App\Http\Controllers;

class QueryController
{
    /**
     * Method to show test-mysql query (Result)
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $query = true;
        return view('query.index', compact('query'));
    }
}