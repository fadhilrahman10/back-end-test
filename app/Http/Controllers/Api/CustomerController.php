<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function __invoke()
    {
        $customer = Customer::with('familtList')->get();
        return response()->json($customer);
    }
}
