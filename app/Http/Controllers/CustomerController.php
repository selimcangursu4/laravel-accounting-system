<?php

namespace App\Http\Controllers;

use App\Models\Balances;
use App\Models\Cities;
use App\Models\CompanyRepresentative;
use App\Models\Country;
use App\Models\Customer;
use App\Models\District;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomerController extends Controller
{
    public function index()
    {
        return view('sales.customers.index');
    }

    public function create(Request $request)
    {
        $countries = Country::all();
        return view('sales.customers.create',compact('countries'));
    }

    public function store(Request $request)
    {
        try {
            // Müşteriyi Oluştur
            $customer = new Customer();
            $customer->customer_type_id  = $request->input('customer_type_id');
            $customer->name              = $request->input('fullname');
            $customer->phone             = $request->input('phone');
            $customer->alternative_phone = $request->input('alternative_phone');
            $customer->email             = $request->input('email');
            $customer->tckn              = $request->input('tckn');
            $customer->country_id        = $request->input('country_id');
            $customer->city_id           = $request->input('city_id');
            $customer->district_id       = $request->input('district_id');
            $customer->fax_number        = $request->input('fax_number');
            $customer->address           = $request->input('address');
            $customer->postal_code       = $request->input('postal_code');
            $customer->tax_office        = $request->input('tax_office');
            $customer->tax_number        = $request->input('tax_number');
            $customer->iban              = $request->input('iban');
            $customer->marketing_consent = $request->input('marketing_consent_id');
            $customer->user_id           = 1; // Auth::user()->id;

            // Müşteri kaydını kaydet
            if (!$customer->save()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Müşteri kaydedilemedi!'
                ]);
            }

            // Firmanın Temsilci Kayıt Edilmesi
            if ($request->input('representative_name') !== null) {
                $representative = new CompanyRepresentative();
                $representative->customer_id = $customer->id;
                $representative->name        = $request->input('representative_name');
                $representative->phone       = $request->input('representative_phone');
                $representative->email       = $request->input('representative_email');
                $representative->note        = $request->input('representative_note');

                // Temsilci kaydını kaydet
                if (!$representative->save()) {
                    return response()->json([
                        'success' => false,
                        'message' => 'Temsilci kaydedilemedi!'
                    ]);
                }
            }

            // Cari Hesap & Bakiye Oluşturulması
            if ($request->input('current_name') !== null) {
                $balances = new Balances();
                $balances->customer_id      = $customer->id;
                $balances->transaction_date = $request->input('current_date');
                $balances->amount           = $request->input('current_amount');
                $balances->status_id        = $request->input('current_status_id');
                $balances->user_id          = 1;

                // Bakiye kaydını kaydet
                if (!$balances->save()) {
                    return response()->json([
                        'success' => false,
                        'message' => 'Bakiye kaydedilemedi!'
                    ]);
                }
            }

            return response()->json([
                'success' => true,
                'message' => 'Müşteri Başarıyla Eklendi!'
            ]);
        } catch (Exception $th) {
            return response()->json([
                'success' => false,
                'message' => 'Hata Mesajı: ' . $th->getMessage()
            ]);
        }
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

    // Ülkeye Göre Şehirlerin Listelenmesi
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
