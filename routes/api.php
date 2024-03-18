<?php
use App\Http\Controllers\NewUserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

/*Route::get("/getusers",[NewUserController::class,'get_all_users']);
Route::post("/createit",[NewUserController::class,'create_user']);
Route::delete("/delete/{id}",[NewUserController::class,'delete_user']);*/

Route::group(['prefix'=>'v1','namespace'=>'App\Http\Controllers\API\V1'],function(){

           Route::apiResource('customers',CustomersController::class);
           Route::apiResource('Invoices',InvoiceController::class);
           

});
