<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view(view: 'category');
    }

    /**
     * Display the specified resource.
     *
     * @param $slug
     */
    public function show($slug)
    {
        return view(view: 'show');
    }
}
