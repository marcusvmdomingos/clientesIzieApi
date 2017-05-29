<?php

namespace App\Http\Controllers;

use App\Address;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AddressesController extends Controller
{

    // public function index()
    // {
    //     $addresses = Address::with('customer')->get();
    //     return response()->json($addresses);
    // }

    public function index(Request $request)
    {
        $customer_id = $request->customer_id;
        if($customer_id) {
            $addresses = Address::with('customer')-> where('customer_id', $customer_id)->get();
        }else{
            return response()->json([
                'message'   => 'Cliente não informado. Informe um cliente.',
            ], 409);
        }
            
            return response()->json($addresses);
    }

    public function show($id)
    {
        $address = Address::with('customer')->find($id);

        if(!$address) {
            return response()->json([
                'message'   => 'Endereço não encontrado.',
            ], 404);
        }

        return response()->json($address);
    }

    public function store(Request $request)
    {
        $address = new Address();
        $address->fill($request->all());
        $address->save();

        return response()->json($address, 201);
    }

    public function update(Request $request, $id)
    {
        $address = Address::find($id);

        if(!$address) {
            return response()->json([
                'message'   => 'Endereço não encontrado.',
            ], 404);
        }

        $address->fill($request->all());
        $address->save();

        return response()->json($address);
    }

    public function destroy($id)
    {
        $address = Address::find($id);

        if(!$address) {
            return response()->json([
                'message'   => 'Endereço não encontrado.',
            ], 404);
        }

        $address->delete();
    }
}