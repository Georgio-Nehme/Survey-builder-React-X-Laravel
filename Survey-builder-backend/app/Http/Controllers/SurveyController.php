<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Survey;
use App\Models\Question;
use App\Models\Answer;
use App\Models\Choice;
use Illuminate\Support\Facades\DB;



class SurveyController extends Controller
{
    public function getAllSurveys() {
        
        return response()->json([
            "status" => "Success",
            "surveys" => Survey::all(),
        ], 200);
    }

    public function createSurvey(Request $request) {
        $survey = new Survey;
        $survey->title = $request->title;
        $survey->description = $request->description;
        $survey->save();

        return response()->json([
            "status" => "success",
        ], 200);
    }

  
    public function submitSurvey(Request $request){
    $answers = $request;
        foreach($answers as $new_answer) {
            
            $new_answer = new Answer;
            $new_answer->answer = $answer->answer;
            $new_answer->question_id = $answer->question_id;
            $new_answer->user_id = $answer->user_id;
            $new_answer->save();
        }
      
    }
}





 