<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //sweetFlashMessageShow('top-end','success', 'CECKING',false,3000);
        //sweetFlashIsConfirmOrErrorAutoFade('Deleted!', 'Your data has been deleted', 'success');

        return view('layouts.admin_master');

    }

}
