<?php


namespace App\Repositories;

use App\Models\Customer;

class CustomerRepository
{
    protected $customers;

    public function __construct(Customer $customers)
    {
        $this->customers = $customers;
    }

    public function activeCustomers()
    {
        return Customer::OrderBy('name')
        ->where("active", 1)
        ->with("user")
        ->get()
        ->map(function($customer){
            return [
                'customer_id' => $customer->id,
                'name' => $customer->name,
                'created_by'=> $customer->user,
                'last_updated'=> $customer->updated_at->diffForHumans(),
            ];
        });
    }
}
