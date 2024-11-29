<?php

namespace App\Http\Controllers;

use App\Models\Cities;
use App\Models\Country;
use App\Models\Department;
use App\Models\District;
use App\Models\Role;
use App\Models\User;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('settings.users.index');
    }

    public function create()
    {
        $roles       = Role::all();
        $countries   = Country::all();
        $departments = Department::all();
        return view('settings.users.create',compact('departments','roles','countries'));
    }

    public function store(Request $request)
    {
        $validateResult = $request->validate([
            'fullname'      => ['required','string','max:255'],
            'username'      => ['required','string','max:255','unique:users'],
            'email'         => ['required','email'],
            'phone'         => ['required','string'],
            'gender_id'     => ['required','integer','max:20'],
            'birthday'      => ['required','date',''],
            'department_id' => ['required','integer'],
            'role_id'       => ['required','integer'],
            'address'       => ['required','string'],
            'country_id'    => ['required','integer'],
            'city_id'       => ['required','integer'],
            'district_id'   => ['required','integer'],
            'password'      => ['required','string'],
        ]);

        if($validateResult)
        {

            $user = new User();
            $user->name          = $request->input('fullname');
            $user->username      = $request->input('username');
            $user->email         = $request->input('email');
            $user->phone         = $request->input('phone');
            $user->gender_id     = $request->input('gender_id');
            $user->date_of_birth = $request->input('birthday');
            $user->department_id = $request->input('department_id');
            $user->role_id       = $request->input('role_id');
            $user->address       = $request->input('address');
            $user->country_id    = $request->input('country_id');
            $user->city_id       = $request->input('city_id');
            $user->district_id   = $request->input('district_id');
            $user->password      = bcrypt( $request->input('password'));
            $user->save();

            return response()->json([
               'success' => true,
               'message' => 'Kullanıcı Başarıyla Eklendi!'
            ]);

        }else{
            return response()->json([
                'success' => true,
                'message' => 'Eksik Bilgi Lütfen Tüm Alanları Doldurunuz !'
            ]);
        }




    }

    public function fetch(Request $request)
    {
        $query = User::query();

        if($request->filled('search_user_id')) {
            $query->where('id', $request->input('search_user_id'));
        }
        if($request->filled('search_user_gender_id')) {
            $query->where('gender_id', $request->input('search_user_gender_id'));
        }
        if($request->filled('search_user_fullname')) {
            $query->where('name', 'LIKE', '%' . $request->input('search_user_fullname') . '%');
        }
        if($request->filled('search_user_email')) {
            $query->where('email', $request->input('search_user_email'));
        }
        if($request->filled('search_user_phone')) {
            $query->where('phone', $request->input('search_user_phone'));
        }
        if($request->filled('search_user_department_id')) {
            $query->where('department_id', $request->input('search_user_department_id'));
        }
        if($request->filled('search_user_role_id')) {
            $query->where('role_id', $request->input('search_user_role_id'));
        }
        if($request->filled('search_user_created_date') && $request->filled('search_user_end_date')) {
            $query->whereBetween('created_at', [
                $request->input('search_user_created_date'),
                $request->input('search_user_end_date')
            ]);
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
