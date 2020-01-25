<?php

namespace App\Models;

use App\Models\Interfaces\QuestionCreator;

class QuestionChoixUniqueCreator implements QuestionCreator
{

    public function createQuestion()
    {
       return new QuestionChoixUnique;
    }

}
