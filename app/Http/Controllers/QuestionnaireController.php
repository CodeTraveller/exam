<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Response;

class QuestionnaireController extends Controller
{
    public function show($url)
    {
        return $url;
    }
}
