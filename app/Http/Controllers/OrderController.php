<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function show($order)
    {
        return view('order', [
            'order' => Order::where('orderNumber', $order)->firstOrFail()
        ]);
    }

    public function index()
    {
        return view('orders.index', [
            'orders' => Order::paginate(10),
            'buttonVisible' => true
        ]);
    }

    public function create()
    {
        return view('orders.create', [
            'orders' => Order::class,
            'customers' => \App\Models\Customer::get(),
            'status' => Order::select('status')->distinct()->get(),
            'buttonVisible' => false
        ]);
    }

    public function store()
    {
        Order::create($this->validateInputs());
        return redirect('/orders');
    }

    public function edit(Order $order)
    {
        return view('orders.edit', [
            'order' => $order,
            'status' => Order::select('status')->distinct()->get()
        ]);
    }

    public function update(Order $order)
    {
        $order->update($this->validateInputs(true));
        return redirect('/orders');
    }

    public function destroy(Order $order)
    {
        $order->delete();
        return redirect('/orders');
    }

    /**
     * @return array
     */
    public function validateInputs(bool $edit = false): array
    {
        $validatedInput = request()->validate([
            'shippedDate' => 'nullable',
            'status' => 'required',
            'comments' => 'nullable',
        ]);
        if (!$edit) {
            return array_merge($validatedInput, request()->validate([
                'orderNumber' => 'required',
                'orderDate' => 'required',
                'requiredDate' => 'required',
                'customerNumber' => 'required'
            ]));
        } else {
            return $validatedInput;
        }
    }
}
