<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{

    public function index()
    {
        return view('customers.index', [
            'customers' => Customer::paginate(10),
            'buttonVisible' => true
        ]);
    }

    public function show(Customer $customer)
    {
        return view('customers.show', [
            'employees' => \App\Models\Employee::get()->where('jobTitle', 'Sales Rep'),
            'customer' => $customer
        ]);
    }

    public function create()
    {
        return view('customers.create', [
            'customer' => Customer::class,
            'employees' => \App\Models\Employee::get()->where('jobTitle', 'Sales Rep'),
            'buttonVisible' => false
        ]);
    }

    public function store()
    {
        Customer::create($this->validateInputs());
        return redirect('/customers');
    }

    public function update(Customer $customer)
    {
        $customer->update($this->validateInputs(true));
        return redirect('/customers');
    }

    public function edit(Customer $customer)
    {
        return view('customers.edit', [
            'customer' => $customer,
            'employees' => \App\Models\Employee::get()
        ]);
    }

    public function destroy(Customer $customer)
    {
        $customer->delete();
        return redirect('/customers');
    }

    /**
     * @return array
     */
    public function validateInputs(bool $edit = false): array
    {
        $validatedInput = request()->validate([
            'customerName' => 'required',
            'contactFirstName' => 'required',
            'contactLastName' => 'required',
            'phone' => 'required',
            'addressLine1' => 'required',
            'addressLine2' => 'nullable',
            'city' => 'required',
            'state' => 'nullable',
            'postalCode' => 'required',
            'country' => 'required',
            'salesRepEmployeeNumber' => 'required',
            'creditLimit' => 'required'
        ]);
        if (!$edit) {
            return array_merge($validatedInput, request()->validate(['customerNumber' => 'required']));
        } else {
            return $validatedInput;
        }

    }
}
