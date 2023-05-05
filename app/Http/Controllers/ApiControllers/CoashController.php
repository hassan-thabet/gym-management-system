<?php

namespace App\Http\Controllers\ApiControllers;

use App\Http\Controllers\Controller;
use App\Models\Coash;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class CoashController extends Controller { 

    // public function login(Request $request){

    //     $request -> validate([
    //         'email' => ['required' , 'email', 'max:255'],
    //         'password' => ['required', 'min:8'],
    //     ]);

    //     $email = $request->input('email');
    //     $password = $request->input('password');
    //     $credentials = $request->only('email', 'password');

    //     if (auth()->attempt(['email' => $email, 'password' => $request->input("password")])) {
    //             $coash = Coash::where('email' , $email)->first();
    //         return Response()->json([
    //             'success' => true,
    //             'message' => 'Hello Coash',
    //             'data' => $coash
    //         ]);

    //     }
    //     $message =  [
    //         'error' => true,
    //         'message' => ' login data is error',
    //     ];
    //     return Response()->json([
    //         'success' => false,
    //         'message' => 'Coash Logged in failed',
    //         'data' => $message
    //     ], 404);
    // }



 }