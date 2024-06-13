<?php

namespace App\Http\Controllers;

use App\Models\QuestionnaireStudentUrl;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class QuestionnaireController extends Controller
{
    public function show(string $url)
    {
        // Note: Need to add one more condition to check if answer is already submitted by student
        $questionnaireStudentUrl = QuestionnaireStudentUrl::whereHas('questionnaire', function ($q) {
            $q->where('expiration_date', '>', date('Y-m-d'));
            $q->whereHas('questions.subject');
        })
            ->with([
                'questionnaire.questionnaireQuestions.question.subject',
                'questionnaire.questionnaireQuestions.question.options',
                'student',
            ])
            ->where('url', $url)
            ->firstOrFail();

        return Inertia::render('Questionnaires/Show', [
            'questionnaireStudentUrl' => $questionnaireStudentUrl,
            'questionnaire' => $questionnaireStudentUrl->questionnaire,
            'questionnaireQuestions' => $questionnaireStudentUrl->questionnaireQuestions,
            // 'questions' => $questionnaireStudentUrl->questionnaireQuestions->question,
            'student' => $questionnaireStudentUrl->student,
        ]);
    }
}
