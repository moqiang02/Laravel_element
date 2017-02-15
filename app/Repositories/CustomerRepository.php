<?php

namespace App\Repositories;


use App\Customer;

class CustomerRepository
{
    use BaseRepository;

    protected $model;


    public function __construct(Customer $customer)
    {
        $this->model = $customer;

    }
}