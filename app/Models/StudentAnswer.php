<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class StudentAnswer extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'student_id',
        'questionnaire_id',
        'question_id',
        'selected_question_option_id',
    ];

    public function student(): BelongsTo
    {
        return $this->belongsTo(Student::class, 'student_id');
    }

    public function questionnaire(): BelongsTo
    {
        return $this->belongsTo(Questionnaire::class, 'questionnaire_id');
    }

    public function question(): BelongsTo
    {
        return $this->BelongsTo(Question::class, 'question_id');
    }

    public function selectedOption(): BelongsTo
    {
        return $this->BelongsTo(QuestionOption::class, 'selected_question_option_id');
    }
}
