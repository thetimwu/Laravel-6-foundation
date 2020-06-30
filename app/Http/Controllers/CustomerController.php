<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
// use App\Repositories\CustomerRepository;
use App\Repositories\CustomerRepositoryInterface;

class CustomerController extends Controller
{
    protected $customerRepository;

    public function __construct(CustomerRepositoryInterface $customerRepository)
    {
        $this->customerRepository = $customerRepository;
    }

    public function index()
    {
        return  $this->customerRepository->getCustomerAll();
    }

    public function show($customerId)
    {
        return $this->customerRepository->findById($customerId);
    }

    public function update($customerId)
    {
        $this->customerRepository->updateById($customerId);

        return redirect('/customer/' . $customerId);
    }

    public function destroy($customerId)
    {
        $this->customerRepository->deleteById($customerId);

        return redirect('/');
    }
}
