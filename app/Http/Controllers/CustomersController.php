<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class CustomersController extends Controller
{
    public function index()
    {
        $customers = Customer::all();
        return response()->json($customers);
    }

    public function show($id)
    {
        $customer = Customer::find($id);

        if(!$customer) {
            return response()->json([
                'message'   => 'Cliente não encontrado.',
            ], 404);
        }

        return response()->json($customer);
    }

    public function store(Request $request)
    {
        $customer = new Customer();
        $customer->fill($request->all());
        $customer->save();

        return response()->json($customer, 201);
    }

    // public function update(Request $request, $id)
    // {
    //     $customer = Customer::find($id);

    //     if(!$customer) {
    //         return response()->json([
    //             'message'   => 'Cliente não encontrado.',
    //         ], 404);
    //     }

    //     $customer->fill($request->all());
    //     $customer->save();

    //     return response()->json($customer);
    // }

    // public function destroy($id)
    // {
    //     $customer = Customer::find($id);

    //     if(!$customer) {
    //         return response()->json([
    //             'message'   => 'Cliente não encontrado.',
    //         ], 404);
    //     }

    //     $customer->delete();
    // }
}