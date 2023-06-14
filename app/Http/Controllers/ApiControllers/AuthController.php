<?php

namespace App\Http\Controllers\ApiControllers;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class AuthController extends Controller {

    public function login(Request $request){

        try {
            $request -> validate([
                'email' => ['required' , 'email', 'max:255'],
                'password' => ['required', 'min:8'],
            ]);
        } catch (\Throwable $th) {
            return Response()->json([
                'success' => false,
                'message' => 'entered data not valid',
                'data' => $th->getMessage()
            ] , 404);
        }

        $email = $request->input('email');
        $credentials = $request->only('email', 'password');
        $user = User::where('email' , $email)->first();
        try {
            if (Auth::attempt($credentials)){
                return Response()->json([
                    'success' => true,
                    'message' => 'Logged in done successfully',
                    'data' => $user
                ]);
            }
        } catch (\Throwable $th) {
            return Response()->json([
                'success' => false,
                'message' => 'User Logged in failed',
                'data' => $th->getMessage()
            ], 404);
        }


        return Response()->json([
            'success' => false,
            'message' => 'User Logged in failed',
            'data' => 'null'
        ], 404);
    }



    public function register(Request $request){

        try {
            $request -> validate([
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required' , 'string', 'email', 'max:255', 'unique:users'],
                'password' => ['required', 'string', 'min:8'],
                'phone_number' => ['required', 'string'],
                'height' => ['required' , 'integer'],
                'weight' => ['required' , 'integer'],
                'age' => ['required' , 'integer'],
                'fat_percentage' => ['required' , 'integer'],
            
            ]);
        } catch (\Throwable $th) {
            return Response()->json([
                'success' => false,
                'message' => 'entered data not valid',
                'data' => $th->getMessage()
            ] , 404);
        }


        try {
            $user = new User();
            $user -> name = $request->input('name');
            $user -> email = $request->input('email');
            $user -> password  = Hash::make($request->input('password'));
            $user -> phone_number = $request->input('phone_number');
            $user -> height = $request->input('height');
            $user -> weight = $request->input('weight');
            $user -> age = $request->input('age');
            $user -> fat_percentage = $request->input('fat_percentage');
            $user -> account_status = 'Active';
    
            $user -> api_token = bin2hex(openssl_random_pseudo_bytes(30));
            $user -> save();
            return Response()->json([
                'success' => true,
                'message' => 'User created successfully',
                'data' => $user
            ]);
        } catch (\Exception $e) {
            return Response()->json([
                'success' => false,
                'message' => 'User created failed',
                'data' => $e->getMessage()
            ], 404);
        }



        
    }


}