<?php

namespace App\Http\Controllers;

use App\Models\Cities;
use App\Models\Country;
use App\Models\District;
use App\Models\Suppliers;
use Exception;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    // İndex Sayfası
    public function index()
    {
        $countries = Country::all();
        return view('acquisition.suppliers.index',compact('countries'));
    }

    public function create(Request $request)
    {
        $countries = Country::all();
        return view('acquisition.suppliers.create',compact('countries'));
    }

    public function store(Request $request)
    {
       try {
        $supplier = new Suppliers();
        $supplier->name = $request->input('name');
        $supplier->contact_person = $request->input('contact_name');
        $supplier->email = $request->input('email');
        $supplier->phone = $request->input('phone');
        $supplier->address = $request->input('address');
        $supplier->tax_number = $request->input('tax_number');
        $supplier->status_id = $request->input('status_id');
        $supplier->country_id = $request->input('country_id');
        $supplier->city_id = $request->input('city_id');
        $supplier->district_id = $request->input('district_id');
        $supplier->note = $request->input('note');
        $supplier->save();

        return response()->json(['success' => true,'message' => 'Tedarikçi Başarıyla Eklendi!']);

    } catch (Exception $th) {
          return response()->json(['success' => false,'message' => $th]);
       }

    }

    public function fetch(Request $request)
    {
        $query = Suppliers::query();

        if($request->filled('search_supplier_id'))
        {
            $query->where('id','=',$request->input('search_supplier_id'));
        }
        if($request->filled('search_contact_person'))
        {
            $query->where('contact_person','=' ,$request->input('search_contact_person').'%');
        }
        if($request->filled('search_supplier_email'))
        {
            $query->where('email','=' ,$request->input('search_supplier_email').'%');
        }
        if($request->filled('search_supplier_phone'))
        {
            $query->where('phone','=' ,$request->input('search_supplier_phone').'%');
        }
        if($request->filled('search_status_id'))
        {
            $query->where('status_id','=' ,$request->input('search_status_id'));
        }
        if($request->filled('search_supplier_country_id'))
        {
            $query->where('country_id','=' ,$request->input('search_supplier_country_id'));
        }
        if($request->filled('search_supplier_city_id'))
        {
            $query->where('city_id','=' ,$request->input('search_supplier_city_id'));
        }
        if($request->filled('search_supplier_district_id'))
        {
            $query->where('district_id','=' ,$request->input('search_supplier_district_id'));
        }

        return datatables()->of($query)->make(true);
    }



    // Ülkeye Göre Şehirlerin Listelenmesi
    public function getCity(Request $request)
    {
        $cities = Cities::where('ulke_id','=',$request->input('country_id'))->get();

        return response()->json($cities);
    }

    // Şehire Göre İlçelerin Listelenmesi
    public function getDistrict(Request $request)
    {
        $districts = District::where('sehir_id','=',$request->input('city_id'))->get();

        return response()->json($districts);
    }
}
