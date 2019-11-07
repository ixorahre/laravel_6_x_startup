<?php

namespace App\Http\Controllers;

use App\Http\Traits\FileTrait;
use Illuminate\Http\Request;

class TestController extends Controller
{
    use FileTrait;


    public function testMe(Request $request)
    {
        //$this->showUploadFile($request->file('fileToUpload'), 'imgs');
        $error_show = 'there is something wrong....';
        return view('errors.error_500', compact('error_show'));
    }
}
