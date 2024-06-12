<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\QuestionnaireCreateRequest;
use App\Models\Questionnaire;
use App\Models\Subject;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;

class QuestionnaireController extends Controller
{
    private int $pageSize = 20;

    /**
     * Display a listing of the resource.
     */
    public function index(): Response
    {
        $activeQuestionnaires = Questionnaire::where('expiration_date', '>', date('Y-m-d'))
            ->paginate($this->pageSize);

        return Inertia::render('Admin/Questionnaires/Index', [
            'activeQuestionnaires' => $activeQuestionnaires,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): Response
    {
        return Inertia::render('Admin/Questionnaires/Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(QuestionnaireCreateRequest $request): RedirectResponse
    {
        $data = $request->all();

        $questionnaire = Questionnaire::create($data);

        if ($questionnaire) {
            $subjects = Subject::active()->get();

            if ($subjects->isNotEmpty()) {
                foreach ($subjects as $subject) {
                    $randomQuestions = $subject->questions()->inRandomOrder()->limit(5)->get();

                    if ($randomQuestions)
                        $questionnaire->questions()->sync($randomQuestions);
                }
            }
        }

        return Redirect::route('admin.questionnaires.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
