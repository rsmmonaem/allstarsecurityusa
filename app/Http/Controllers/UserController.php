<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Transaction;
use App\Models\Sale;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index()
    {
        return view('user.home.index');
    }
    public function all_users()
    {
        $customers = Customer::with(['user'])->get();

        return view ('super-admin.users.index', compact('customers'));
    }


    public function customers()
    {
        $role = 'user';
        $customers = Customer::whereHas('user', function($query) use ($role) {
            $query->whereHas('roles', function($query) use ($role) {
                $query->where('name', $role);
            });
        })->with('user')->get();

        return view ('super-admin.users.index', compact('customers'));
    }

    public function agents()
    {
        $role = 'agent';

        $customers = Customer::whereHas('user', function($query) use ($role) {
            $query->whereHas('roles', function($query) use ($role) {
                $query->where('name', $role); // Check the role name
            });
        })->with('user')->get();

        return view ('super-admin.users.index', compact('customers'));
    }

}
