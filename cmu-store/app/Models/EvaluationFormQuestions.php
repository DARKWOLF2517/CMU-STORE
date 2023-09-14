<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EvaluationFormQuestions extends Model
{
    use HasFactory;
    protected $table = 'evaluation_form_questions';
    // protected $primaryKey = 'event_id'; 
    protected $fillable = [
        'id',
        'org_id',
        'evaluation_form_id',
        'question'
    ];

    public function formDetails()
    {
        return $this->belongsTo(EvaluationFormDetails::class);
    }   
}
