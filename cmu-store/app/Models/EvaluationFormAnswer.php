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
        'evaluation_form_id',
        'user_id',
        'evaluation_form_question_id',
        'answer'
    ];

}
