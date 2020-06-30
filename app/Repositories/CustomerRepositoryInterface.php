<?php

namespace App\Repositories;

interface CustomerRepositoryInterface
{
    public function getCustomerAll();

    public function findById($customerId);

    public function updateById($customerId);

    public function deleteById($customerId);
}
