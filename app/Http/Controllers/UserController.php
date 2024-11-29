<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('settings.users.index');
    }

    public function create()
    {
        $departments = Department::all();
        return view('settings.users.create',compact('departments'));
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

}
