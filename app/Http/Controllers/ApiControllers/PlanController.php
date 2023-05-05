<?php

namespace App\Http\Controllers\ApiControllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Plan;
use App\Models\Muscle;
use App\Models\Exercise;
use Illuminate\Http\Request;

class PlanController extends Controller
{

    public function getUserPlanByDay($user_id , $day){
        try {
            $plan = Plan::with('exercise')
            ->with('muscle')
            ->where('user_id' , $user_id)
            ->where('day' , $day)
            ->get()
            ->all();
            return Response()->json([
                'success' => true,
                'message' => 'successfully',
                'data' => $plan
            ]);
        } catch (\Exception $e) {
            return Response()->json([
                'success' => false,
                'message' => 'failed',
                'data' => $e->getMessage()
            ], 404);
        }
    }



    public function getUserPlanByMuscle($user_id , $muscle_id){
        try {
            $plan = Plan::with('exercise')
            ->with('muscle')
            ->where('user_id' , $user_id)
            ->where('muscle_id' , $muscle_id)
            ->get()
            ->all();
            return Response()->json([
                'success' => true,
                'message' => 'successfully',
                'data' => $plan
            ]);
        } catch (\Exception $e) {
            return Response()->json([
                'success' => false,
                'message' => 'failed',
                'data' => $e->getMessage()
            ], 404);
        }
    }




    public function getUserPlanByMuscleAndDay($user_id , $muscle_id , $day){
        try {
            $plan = Plan::with('exercise')
            ->with('muscle')
            ->where('user_id' , $user_id)
            ->where('muscle_id' , $muscle_id)
            ->where('day' , $day)
            ->get()
            ->all();
            return Response()->json([
                'success' => true,
                'message' => 'successfully',
                'data' => $plan
            ]);
        } catch (\Exception $e) {
            return Response()->json([
                'success' => false,
                'message' => 'failed',
                'data' => $e->getMessage()
            ], 404);
        }
    }

}