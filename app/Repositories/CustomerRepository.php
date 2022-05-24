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
        ->map->format();
    }

    public function getById($customer_id)
    {
        $customer = Customer::find($customer_id);

        // return Customer::where("id", $customer_id)
        // ->where("active", 1)
        // ->with('user')
        // ->first();
        return $customer->format();
    }

    public function updateCustomer($customer_id)
    {
        $customer = Customer::where("id", $customer_id)->first();
        $customer->update(request()->only("name"));

    }

    public function deleteCustomer($customer_id)
    {
        $customer = Customer::where("id", $customer_id)->delete();
    }

}
