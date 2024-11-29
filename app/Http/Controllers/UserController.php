<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('settings.users.index');
    }

    public function fetch(Request $request)
    {
        $query = User::query();

        if($request->filled('search_user_id'))
        {
            $query->where('id','=',$request->input('search_user_id'));
        }
        if($request->filled('search_user_fullname'))
        {
            $query->where('name','LIKE','%'.$request->input('search_user_fullname').'%');
        }
        if($request->filled('search_user_fullname'))
        {
            $query->where('name','LIKE','%'.$request->input('search_user_fullname').'%');
        }
        if($request->filled('search_user_fullname'))
        {
            $query->where('name','LIKE','%'.$request->input('search_user_fullname').'%');
        }
        if($request->filled('search_user_fullname'))
        {
            $query->where('name','LIKE','%'.$request->input('search_user_fullname').'%');
        }
        if($request->filled('search_user_fullname'))
        {
            $query->where('name','LIKE','%'.$request->input('search_user_fullname').'%');
        }

        return datatables()->of($query)->make(true);
    }

    public function create()
    {
        return view('settings.users.create');
    }

}
