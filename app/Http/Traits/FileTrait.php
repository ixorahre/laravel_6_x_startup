<?php


namespace App\Http\Traits;


trait FileTrait
{
    public function showUploadFile($file,$destinationPath) {
        die('comes');

        //Display File Name
        echo 'File Name: '.$file->getClientOriginalName();
        echo '<br>';
        die;

        //Display File Extension
        echo 'File Extension: '.$file->getClientOriginalExtension();
        echo '<br>';

        //Display File Real Path
        echo 'File Real Path: '.$file->getRealPath();
        echo '<br>';

        //Display File Size
        echo 'File Size: '.$file->getSize();
        echo '<br>';

        //Display File Mime Type
        echo 'File Mime Type: '.$file->getMimeType();

        //Move Uploaded File
        //$file->move($destinationPath,$file->getClientOriginalName());
    }
}
