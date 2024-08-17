<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CustomerController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $customers = Customer::with('user')->get();
        return view('customers.index', compact('customers'));
    }

    public function show($id)
    {
        return Customer::findOrFail($id)->with(['user'])->get();
    }

    public function store(Request $request)
    {
        $customer = Customer::create($request->all());
        return response()->json($customer, 201);
    }

    public function update(Request $request, $id)
    {
        $customer = Customer::findOrFail($id);
        $customer->update($request->all());
        return response()->json($customer, 200);
    }

    public function destroy($id)
    {
        Customer::findOrFail($id)->delete();
        return response()->json(null, 204);
    }
}
