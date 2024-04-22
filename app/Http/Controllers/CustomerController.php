<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\FamilyList;
use App\Models\Nationality;
use Cassandra\Custom;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;
use Inertia\Inertia;

class CustomerController extends Controller
{
    public function index()
    {
        return Inertia::render('Customer/Index', [
            'laravelVersion' => Application::VERSION,
            'phpVersion' => PHP_VERSION,
        ]);
    }

    public function create()
    {
        return Inertia::render('Customer/Create');
    }

    public function store(Request $request)
    {
//        $customer = Customer::create([
//            'cst_name' => $request->name,
//            'cst_dob' => $request->dob,
//            'cst_nationality_id' => $request->nationality,
//            'cst_phoneNum' => '-',
//            'cst_email' => '-'
//        ]);

        dd($request->all());
    }

    public function edit()
    {
        return Inertia::render('Customer/Edit', []);
    }

    public function update(Request $request, Customer $customer)
    {

    }

    public function destroy(Customer $customer)
    {

    }
}
