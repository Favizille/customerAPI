<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use App\Repositories\CustomerRepository;

class CustomerController extends Controller
{

    protected  $customerRepository;

    public function __construct(CustomerRepository $customerRepository){
        $this->customerRepository=$customerRepository;
    }

    public function index(){
        // return strval(get_class($this->customerRepository));

        $customers =$this->customerRepository->activeCustomers();

        return [
            "data" => $customers,
            "message" => "Here are all the active customers",
        ];
    }

    public function show($customer_id){
        $customer = $this->customerRepository->getById($customer_id);

        return $customer;
    }

    public function update($customer_id){
        $this->customerRepository->updateCustomer($customer_id);

        return redirect("/customer/".$customer_id);
    }

    public function destroy($customer_id){
        $this->customerRepository->deleteCustomer($customer_id);
         return redirect("/customers");
        // return [
        //     "message" => "Customer has been deleted succesfully",
        // ];
    }
}
