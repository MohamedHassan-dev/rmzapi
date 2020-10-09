<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/version', function (Request $request) {
       
   $myObj=new \stdClass();
   $myObj->bo = "true";
   $myJSON = json_encode($myObj);

   if($request->version != '')
   {
   
   return response($myJSON);
   }else{
    return response($myJSON);

   }
  
});

