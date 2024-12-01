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
        return view('stock.warehouse.index');
    }

    public function create()
    {

        $users     = User::all();
        $countries = Country::all();
        return view('stock.warehouse.create',compact('users','countries'));
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
