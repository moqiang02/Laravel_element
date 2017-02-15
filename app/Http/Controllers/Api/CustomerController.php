<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;

class UserController extends ApiController
{

    protected $customer;

    public function __construct(CustomerRepository $customerRepository)
    {
        parent::__construct();
        $this->customer = $customerRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $this->respondWithPaginator($this->article->page(), new ArticleTransformer);
    }

    public function store(Request $request)
    {
        dd($request->all());
        return $this->noContent();
    }

}
