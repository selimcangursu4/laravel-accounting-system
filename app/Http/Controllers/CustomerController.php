<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        return view('sales.customers.index');
    }

    public function create(Request $request)
    {
        return view('sales.customers.create');
    }
    public function fetch(Request $request)
    {
        $query = Customer::query();

        if($request->filled('search_customer_code'))
        {
            $query->where('id','=',$request->input('search_customer_code'));
        }
        if($request->filled('search_customer_type_id'))
        {
            $query->where('customer_type_id','=',$request->input('search_customer_type_id'));
        }
        if($request->filled('search_customer_fullname'))
        {
           $query->where('name','like','%'.$request->input('search_customer_fullname').'%');
        }
        if($request->filled('search_customer_phone'))
        {
            $query->where('phone','=' ,$request->input('search_customer_phone').'%');
        }
        if($request->filled('search_customer_alternavite_phone'))
        {
            $query->where('alternative_phone','=' ,$request->input('search_customer_alternavite_phone').'%');
        }
        if($request->filled('search_customer_email'))
        {
            $query->where('email','=' ,$request->input('search_customer_email').'%');
        }
        if($request->filled('search_customer_fax_number'))
        {
            $query->where('fax_number','=' ,$request->input('search_customer_fax_number').'%');
        }
        if($request->filled('search_customer_created_date'))
        {
            $created_date = $request->input('search_customer_created_date');
            $end_date     = $request->input('search_customer_end_date');

            $query->whereBetween('created_at', [$created_date, $end_date]);
        }

        return datatables()->of($query)->make(true);
    }


}
