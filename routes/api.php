<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DepartmentController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/


    //http://localhost:8000/api/departments

    Route::get('/departments', [DepartmentController::class, 'index']);


      //  Route::get('/posts', function () {
      // return response()->json("this is the return value");
      //  });


      //  Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
      // return $request->user();
      //  });
