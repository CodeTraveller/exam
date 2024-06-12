<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuestionnaireStudentUrl extends Model
{
    use HasFactory;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'questionnaire_id',
        'student_id',
        'url',
    ];

    public function questionnaire(){
        return $this->belongsTo(Questionnaire::class, 'questionnaire_id');
    }

    public function student(){
        return $this->belongsTo(Student::class, 'student_id');
    }
}
