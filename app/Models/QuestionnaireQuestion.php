<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class QuestionnaireQuestion extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'questionnaire_id',
        'question_id',
    ];

    public function questionnaire(){
        return $this->belongsTo(Questionnaire::class, 'questionnaire_id');
    }

    public function question(){
        return $this->belongsTo(Question::class, 'question_id');
    }
}
