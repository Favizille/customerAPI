<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use App\Repositories\CustomerRepository;

class CustomerController extends Controller
{

    private  $customerRepository;

    public function __construct(CustomerRepository $customerRepository){
        $this->customerRepositroy=$customerRepository;
    }

    public function index(){
        return strval(get_class($this->customerRepository));

        // $customers =$this->customerRepository->activeCustomers();
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
        return $customers;
        return [
            "data" => $customers,
            "message" => "Here are all the active customers",
        ];

        // return $customers;
    }
}
