<?php

namespace App\Http\Controllers;

use App\Models\EvaluationFormDetails;
use Illuminate\Http\Request;

class EvaluationController extends Controller
{
    //
    
    public function GetEvaluationResult()
    {   
        $EvaluationQuestions = EvaluationFormDetails::where('id', 1)->with(['formQuestions', 'formOptions', 'formAnswers'])->get();
        // $EvaluationQuestions = EvaluationFormDetails::where('id', 1)->with(['formQuestions'])->get();
        return $EvaluationQuestions->toJson();
    }

}
