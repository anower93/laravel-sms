<?php

use App\Models\User;
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


Route::post('/atm', function(Request $request){

    $all_card = ['123', '342', '143', '112'];

    $all_pin = [
       '123' => '0000', 
       '342' => '1111', 
       '143' => '2222', 
       '112' => '3333'];

    if(in_array($request->card, $all_card)){
        return $all_pin[$request->card].' is your pin!';
    }else{
        return "Card is invalid!";
    }
});


Route::get('/all-users', function(){
    $users = User::all();

    return $users;
});