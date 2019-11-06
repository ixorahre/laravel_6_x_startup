<?php

namespace App\Http\Controllers;

use App\Http\Traits\FileTrait;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //use FileTrait;
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
//        sweetFlashIsDelete();
//        sweetFlashIsConfirmOrError('Updated!', 'Your record has beed updated', 'success');
        //isConfirm('Are you sure?', 'form.submit()');



        return view('layouts.admin_master');

    }

    public function fileUploadTests(Request $request)
    {
        //$this->showUploadFile($request->file('fileToUpload', 'imgs/'));
        die('controller');
    }

}
