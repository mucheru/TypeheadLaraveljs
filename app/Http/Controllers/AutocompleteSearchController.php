<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class AutocompleteSearchController extends Controller
{
    
    public function index()
    {
        return view('autocompleteSearch');

    }
    public function query(Request $request)
    {
        $input =$request->all();
        $data=User::select('name')
            ->where("name","like","%{$input['query']}%")
            ->get();
            return response()->json($data);

    }
}
