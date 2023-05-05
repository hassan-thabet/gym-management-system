<?php

namespace App\Http\Controllers\ApiControllers;

use App\Http\Controllers\Controller;
use App\Models\Muscle;
use App\Models\Exercise;
use Illuminate\Http\Request;

class MuscleController extends Controller
{
    public function getAllMuscles(){
        try {
            $muscles = Muscle::all();
            return Response()->json([
                'success' => true,
                'message' => 'successfully',
                'data' => $muscles
            ]);
        } catch (\Exception $e) {
            return Response()->json([
                'success' => false,
                'message' => 'failed',
                'data' => $e->getMessage()
            ], 404);
        }
    }

    
    public function getMuscle($id){
        $muscle = Muscle::where('id' , $id)->first();
        return Response()->json([
            'success' => true,
            'message' => 'successfully',
            'data' => $muscle
        ]);
    }


    public function getMuscleExercises($id){
        try {
            $exercises = Exercise::with('muscle')->where('muscle_id' , $id)->get();
            return Response()->json([
                'success' => true,
                'message' => 'successfully',
                'data' => $exercises
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
