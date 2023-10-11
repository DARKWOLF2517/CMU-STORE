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
        $validatedData = $request->validate([
            'evaluation_form_id' => 'required|exists:evaluation_form_details,id',
            'user_id' => 'required|exists:users,id',
            'q1' => 'required',
            'q2' => 'required',
            'q3' => 'required',
            'q4' => 'required',
            'q5' => 'required',
            'q6' => 'required',
            'q7' => 'required',
            'q8' => 'required',
            'q9' => 'required',
            'q10' => 'required',
            'q11' => 'required',
            'q12' => 'required',
            'q13' => 'required',
            'q14' => 'required',
            'q15' => 'required',
            'q16' => 'required',
            
        ]);

        // Create a new Event instance
        $answer = new EvaluationFormAnswer();
        $answer->evaluation_form_id = $validatedData['evaluation_form_id'];
        $answer->user_id = $validatedData['user_id'];
        $answer->q1 = $validatedData['q1'];
        $answer->q2 = $validatedData['q2'];
        $answer->q3 = $validatedData['q3'];
        $answer->q4 = $validatedData['q4'];
        $answer->q5 = $validatedData['q5'];
        $answer->q6 = $validatedData['q6'];
        $answer->q7 = $validatedData['q7'];
        $answer->q8 = $validatedData['q8'];
        $answer->q9 = $validatedData['q9'];
        $answer->q10 = $validatedData['q10'];
        $answer->q11 = $validatedData['q11'];
        $answer->q12 = $validatedData['q12'];
        $answer->q13 = $validatedData['q13'];
        $answer->q14 = $validatedData['q14'];
        $answer->q15 = $validatedData['q15'];
        $answer->q16 = $validatedData['q16'];
        $answer->save();

        // Redirect or return a response
        return redirect()->back()->with('success', 'Event created successfully!');
    }
    public function EvaluationFormAnswer($evaluation_form_id, $question_id, $option){ 
        // $EvaluationAnswer = EvaluationFormAnswer::where('evaluation_form_id', $evaluation_form_id )->with(['formQuestions', 'formOptions', 'formAnswers'])->get();
        // // $EvaluationQuestions = EvaluationFormDetails::all();
        $EvaluationAnswer = EvaluationFormAnswer::where([
            ['evaluation_form_id',$evaluation_form_id],
            [$question_id, $option]
        ])->get();

        $EvaluationAnswerCount = $EvaluationAnswer->count();

        
        return $EvaluationAnswerCount;
    }

}
