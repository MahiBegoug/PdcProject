<?php

namespace App\Models;

use App\Models\Interfaces\QuestionCreator;

class QuestionChoixMultipleCreator implements QuestionCreator
{
    public function createQuestion()
    {
        return new QuestionChoixMultiple;
    }
}
