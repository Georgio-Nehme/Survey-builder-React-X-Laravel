<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Choice;
use App\Models\Question;
use App\Models\Survey;
use App\Models\Answer;



class ChoiceController extends Controller{
    public function addChoices(Request $request) {
        $choice = new Choice;
        $choice->choice = $request->choice;
        $choice->question_id = $request->question_id;
        $choice->save();

        return response()->json([
            "status" => "success",
        ], 200);
    }
}
