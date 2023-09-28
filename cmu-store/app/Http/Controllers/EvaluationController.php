<?php

namespace App\Http\Controllers;

use App\Models\EvaluationFormDetails;
use Illuminate\Http\Request;

class EvaluationController extends Controller
{
    //
    
    public function GetEvaluationResult($event_id)
    {   
        $EvaluationQuestions = EvaluationFormDetails::where('event_id', $event_id )->with(['formQuestions', 'formOptions', 'formAnswers'])->get();
        // $EvaluationQuestions = EvaluationFormDetails::all();
        return $EvaluationQuestions->toJson();
        // return ($event_id);
    }
    public function EvaluationFormSummary($event_id)
    { 
        return view('student_organization.student_organization_evaluation_results', ['id' => $event_id]);
    }

}
