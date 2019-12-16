<?php

namespace Digitlimit\Larastuffs\App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{

    /**
     * Render admin home page
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('larastuffs::admin.home.index');
    }
}
