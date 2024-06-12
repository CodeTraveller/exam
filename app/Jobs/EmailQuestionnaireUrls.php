<?php

namespace App\Jobs;

use App\Mail\QuestionnaireUrlMail;
use App\Models\Questionnaire;
use App\Models\QuestionnaireStudentUrl;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class EmailQuestionnaireUrls implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $questionnaire;
    private $questionaireStudentUrl;

    /**
     * Create a new job instance.
     */
    public function __construct(Questionnaire $questionnaire, QuestionnaireStudentUrl $questionaireStudentUrl)
    {
        $this->questionnaire = $questionnaire;
        $this->questionaireStudentUrl = $questionaireStudentUrl;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        Mail::to($this->questionaireStudentUrl->student->email)
            ->send(new QuestionnaireUrlMail($this->questionnaire, $this->questionaireStudentUrl, $this->questionaireStudentUrl->student));
    }
}
