<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class Uppercase implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        // form sa jo value ayagi us ko compare kraga with user uppeer case value

        if(strtoupper($value) !==$value ){
            $fail('The :attribute must be uppercase.');
        }
    }
}
