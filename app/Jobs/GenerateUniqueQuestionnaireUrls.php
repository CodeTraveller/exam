<?php

namespace App\Jobs;

use App\Models\Questionnaire;
use App\Models\Student;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Str;

class GenerateUniqueQuestionnaireUrls implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private int $questionnaireId;

    /**
     * Create a new job instance.
     */
    public function __construct($questionnaireId)
    {
        $this->questionnaireId = $questionnaireId;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $questionnaire = Questionnaire::findOrFail($this->questionnaireId);

        Student::chunk(500, function ($students) use ($questionnaire) {
            $questionnaireStudentUrlData = [];

            foreach ($students as $student) {
                $questionnaireStudentUrlData[] = [
                    // 'questionnaire_id' => $questionnaire->id,
                    'student_id' => $student->id,
                    'url' => Str::uuid(),
                ];
            }

            $questionnaire->questionnaireStudentUrls()->createMany($questionnaireStudentUrlData);
        });

        $questionnaire->load(['questionnaireStudentUrls.student']);

        if ($questionnaire->questionnaireStudentUrls->isNotEmpty()) {
            foreach ($questionnaire->questionnaireStudentUrls as $questionaireStudentUrl) {
                dispatch(new EmailQuestionnaireUrls($questionnaire, $questionaireStudentUrl))->delay(3);
            }
        }
    }
}
