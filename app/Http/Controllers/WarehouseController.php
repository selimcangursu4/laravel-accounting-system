<?php

namespace App\Http\Controllers;

use App\Models\Cities;
use App\Models\Country;
use App\Models\District;
use App\Models\User;
use App\Models\Warehouse;
use Exception;
use Illuminate\Http\Request;

class WarehouseController extends Controller
{
    public function index()
    {
        $users     = User::all();
        $cities    = Cities::all();
        $countries = Country::all();
        $districts = District::all();
        return view('stock.warehouse.index',compact('users', 'cities','countries','districts'));
    }

    public function create()
    {

        $users     = User::all();
        $cities    = Cities::all();
        $countries = Country::all();
        return view('stock.warehouse.create',compact('users','countries','cities'));
    }



    public function store(Request $request)
    {
        try {
            $warehouse = new Warehouse();
            $warehouse->name = $request->input('name');
            $warehouse->warehouse_type_id = $request->input('warehouse_type_id');
            $warehouse->status_id = $request->input('status_id');
            $warehouse->manager_id = $request->input('manager_id');
            $warehouse->capacity = $request->input('capacity');
            $warehouse->current_stock = $request->input('current_stock');
            $warehouse->country_id = $request->input('country_id');
            $warehouse->city_id = $request->input('city_id');
            $warehouse->district_id = $request->input('district_id');
            $warehouse->address = $request->input('address');

            $warehouse->save();

            return response()->json([
                'success' => true,
                'message' => 'Depo Başarıyla Eklendi!'
            ]);

        } catch (Exception $th) {

            return response()->json([
                'success' => false,
                'message' => 'An error occurred while saving the warehouse.'
            ]);
        }
    }


    public function fetch(Request $request)
    {
        $query = Warehouse::query();

        if ($request->filled('warehouse_id')) {
            $query->where('id', '=', $request->input('warehouse_id'));
        }
        if ($request->filled('warehouse_name')) {
            $query->where('name', '=', $request->input('warehouse_name'));
        }
        if ($request->filled('warehouse_type_id')) {
            $query->where('warehouse_type_id', '=', $request->input('warehouse_type_id'));
        }
        if ($request->filled('warehouse_manager_id')) {
            $query->where('manager_id', '=', $request->input('warehouse_manager_id'));
        }
        if ($request->filled('warehouse_status_id')) {
            $query->where('status_id', '=', $request->input('warehouse_status_id'));
        }
        if ($request->filled('warehouse_country_id')) {
            $query->where('country_id', '=', $request->input('warehouse_country_id'));
        }
        if ($request->filled('warehouse_city_id')) {
            $query->where('city_id', '=', $request->input('warehouse_city_id'));
        }
        if ($request->filled('warehouse_district_id')) {
            $query->where('district_id', '=', $request->input('warehouse_district_id'));
        }

        return datatables()->of($query)->make(true);
    }


    //  Ülkeye Göre Şehirlerin Listelenmesi
    public function changeCountry(Request $request)
    {
        $countryId =  $request->input('country_id');

        $cities = Cities::where('ulke_id','=',$countryId)->get();

        return response()->json($cities);

    }
    // Şehirlere Göre İlçelerin Listelenmesi

    public function changeCity(Request $request)
    {
        $districts = District::where('sehir_id','=',$request->input('city_id'))->get();

        return response()->json($districts);
    }

}
