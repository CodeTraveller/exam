<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Questionnaire extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'expiration_date',
    ];

    public function questionnaireQuestions(): HasMany
    {
        return $this->hasMany(QuestionnaireQuestion::class, 'questionnaire_id');
    }

    public function questions(): BelongsToMany
    {
        return $this->belongsToMany(Question::class, 'questionnaire_questions')->using(QuestionnaireQuestion::class);
    }

    public function questionnaireStudentUrls(): HasMany
    {
        return $this->hasMany(QuestionnaireStudentUrl::class, 'questionnaire_id');
    }
}
