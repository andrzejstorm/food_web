<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WineListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view(view: 'winelist');
    }

    /**
     * Display the specified resource.
     *
     * @param  $slug
     */
    public function show($slug)
    {
        return view(view:'wine')->withSlug($slug);
    }
}
