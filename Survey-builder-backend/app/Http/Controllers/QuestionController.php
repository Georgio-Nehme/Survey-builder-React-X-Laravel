<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;

class QuestionController extends Controller
{
    public function getQuestions(){
        return response()->json([
            "status" => "Success",
            "question" => Question::all(),
        ], 200);
    }


    public function addQuestion(Request $request) {
        $question = new Question;
        $question->question = $request->question;
        $question->survey_id = $request->survey_id;
        $question->save();

        return response()->json([
            "status" => "success",
        ], 200);
    }
}
