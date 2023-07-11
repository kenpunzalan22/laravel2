<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;


class DepartmentController extends Controller
{
    //   CRUD Operations
    public function index()
    {

    $services=DB::table('departments')->orderBy('name', 'desc')->get();

    return response()->json($services);

    }
}
