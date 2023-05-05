<?php

namespace App\Http\Controllers\ApiControllers;

use App\Http\Controllers\Controller;
use App\Models\Muscle;
use App\Models\Exercise;
use Illuminate\Http\Request;

class ExerciseController extends Controller
{
    public function getAllExercises(){
        try {
            $exercises = Exercise::with('muscle')->get();
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


        
    public function getExercise($id){
        $exercise = Exercise::where('id' , $id)->first();
        return Response()->json([
            'success' => true,
            'message' => 'successfully',
            'data' => $exercise
        ]);
    }

}
