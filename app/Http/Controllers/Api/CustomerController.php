<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Repositories\CustomerRepository;
use App\Transformers\CustomerTransformer;

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
        return $this->respondWithPaginator($this->customer->page(), new CustomerTransformer);
    }

    public function store(Request $request)
    {
        dd($request->all());
        return $this->noContent();
    }

    public function edit($id)
    {
        return $this->respondWithItem($this->customer->getById($id), new CustomerTransformer());
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();

        $this->customer->update($id, $data);

        return $this->noContent();
    }

}
