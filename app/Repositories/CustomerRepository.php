<?php

namespace App\Repositories;

use App\Customer;
use  App\Repositories\CustomerRepositoryInterface;

class CustomerRepository implements CustomerRepositoryInterface
{

    public function getCustomerAll()
    {
        //call local format function
        // return  Customer::orderBy('name')
        //     ->where('active', request()->only('active'))
        //     ->with('user')
        //     ->get()
        //     ->map(function ($customer) {
        //         $this->format($customer);
        //     });

        //call format function from model
        return  Customer::orderBy('name')
            ->where('active', 1)
            ->with('user')
            ->get()
            ->map->format();
    }

    public function findById($customerId)
    {
        return  Customer::where('id', $customerId)
            ->with('user')
            ->firstOrfail()
            ->format();
    }

    // protected function format($customer)
    // {
    //     return [
    //         'name' => $customer->name,
    //         'email' => $customer->user->email,
    //         'verified_at' => $customer->user->email_verified_at->diffForHumans()
    //     ];
    // }

    public function updateById($customerId)
    {
        $customer = Customer::where('id', $customerId)->firstOrFail();

        $customer->update(request()->only('name'));
    }

    public function deleteById($customerId)
    {
        $customer = Customer::where('id', $customerId)->delete();
    }
}
