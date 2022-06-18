<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Answer;
use App\Models\Question;
use App\Models\Survey;
use App\Models\Choice;
use Illuminate\Support\Facades\DB;

class AnswerController extends Controller
{
    public function showAnswers() {
        $answers = DB::table('answers')
        ->leftJoin('questions','questions.id','=','answers.question_id')
        ->select('answers.id','answers.answer','answers.question_id','questions.question as question_question',)
        ->get();
        return response()->json($answers);
    }

    public function addAnswer(Request $request){
        $answer = new Answer;
        $answer->answer = $request->answer;
        $answer->question_id = $request->question_id;
        $answer->user_id = $request->user_id;
        $answer->save();

        return response()->json([
            "status" => "success",
        ], 200);
    }

}
