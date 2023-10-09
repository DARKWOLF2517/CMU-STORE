<?php

namespace App\Http\Controllers;

use App\Models\EvaluationFormAnswer;
use App\Models\EvaluationFormDetails;
use Illuminate\Http\Request;

class EvaluationController extends Controller
{
    //
    
    public function GetEvaluationResult($event_id){   
        $EvaluationQuestions = EvaluationFormDetails::where('event_id', $event_id )->with(['formQuestions', 'formOptions', 'formAnswers'])->get();
        // $EvaluationQuestions = EvaluationFormDetails::all();
        return $EvaluationQuestions->toJson();
        // return ($event_id);
    }
    public function EvaluationFormSummary($event_id){ 
        return view('student_organization.student_organization_evaluation_results', ['id' => $event_id]);
    }

    public function store(Request $request){
        // Validate the form data
        // $validatedData = $request->validate([
        //     'evaluation_form_id' => 'required|exists:evaluation_form_details,id',
        //     'user_id' => 'required|exists:users,id',
        //     'evaluation_form_question_id' => 'required|exists:evaluation_form_questions,id',
        //     'answer' => 'required',
        // ]);

        // Create a new Event instance
        $answer = new EvaluationFormAnswer();
        $answer->evaluation_form_id = 1;
        $answer->user_id = 2020300620;
        $answer->evaluation_form_question_id = 1;
        $answer->answer = "sadfds";
        
    
        $answer->save();

        // Redirect or return a response
        return redirect()->back()->with('success', 'Event created successfully!');
    }

}
