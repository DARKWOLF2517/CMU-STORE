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
        'event_id', 
        'org_id',
        'user_id',
        'answer'
    ];

}
