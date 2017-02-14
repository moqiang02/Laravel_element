<?php

namespace App\Http\Controllers\Api;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{

//    public function __construct()
//    {
//        parent::__construct();
//    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    public function store(Request $request)
    {
        dd($request->all());
        return $this->noContent();
    }

}
