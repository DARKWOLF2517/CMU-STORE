<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EvaluationFormAnswer extends Model
{
    use HasFactory;
    protected $table = 'evaluation_form_answer';
    // protected $primaryKey = 'event_id'; 
    protected $fillable = [
        'id',
        'org_id',
        'evaluation_form_id',
        'evaluation_form_question_id',
        'user_id',
        'event_id',
        'answer'
    ];

}
