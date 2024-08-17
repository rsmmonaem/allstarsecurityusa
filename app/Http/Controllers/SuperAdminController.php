<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class SuperAdminController extends Controller
{
    public function index()
    {
        // $user = auth()->user();
        // $customer = Customer::where('user_id', $user->id)->first();


        return view('super-admin.home.index');
    }
}
