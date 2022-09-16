<?php

namespace App\Http\Validators;

use Illuminate\Validation\Validator;

class Chapter4 extends Validator
{
    public function validateChapter4($attribute, $value, $parameters)
    {
        return $value % 2 == 0;
    }
}
