<?php

namespace App\Repositories\Impl;

use App\Models\Customer;
use App\Repositories\CustomerRepositoryImpl;
use App\Repositories\Elopuent\EloquentRepository;

class CustomerRepository extends EloquentRepository implements CustomerRepositoryImpl
{
    public function getModel()
    {
        // TODO: Implement getModel() method.
        return Customer::class;
    }
}