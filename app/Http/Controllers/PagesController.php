<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller {

    /**
     * Display the home page(portfolio).
     * 
     * @return \Illuminate\View\View
     */
    public function home()
    {
        return view('pages.home');
    }

}
