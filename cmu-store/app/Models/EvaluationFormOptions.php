<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EvaluationFormOptions extends Model
{
    use HasFactory;
    protected $table = 'evaluation_form_options';
    // protected $primaryKey = 'event_id'; 
    protected $fillable = [
        'id',
        'org_id',
        'evaluation_form_id',
        'event_id',
        'option'
    ];

    public function formQuestions()
    {
        return $this->belongsTo(EvaluationFormQuestions::class);
    }
}
