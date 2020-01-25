<?php

namespace App\Models;

use App\Models\Interfaces\QuestionCreator;

class QuestionCourteCreator implements QuestionCreator
{

    public function createQuestion()
    {
         return new QuestionCourteCreator ;
    }

}
