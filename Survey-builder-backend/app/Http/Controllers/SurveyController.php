<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Survey;
use App\Models\Question;
use App\Models\Answer;
use App\Models\Choice;



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
}