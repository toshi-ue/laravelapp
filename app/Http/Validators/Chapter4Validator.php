<?php

namespace App\Http\Validators;

use Illuminate\Validation\Validator;

class Chapter4Validator extends Validator
{
    public function validateChapter4($attribute, $value, $parameters)
    {
        ddd('f');
        return $value % 2 == 0;
    }
}
