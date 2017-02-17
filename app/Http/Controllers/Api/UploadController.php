<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;

class UploadController extends ApiController
{


    public function upimg(Request $request)
    {
//        dd($request->file());
        $path = $request->file("customer_img")->store('images');
//        dd($path);
        return $path;
    }

}
