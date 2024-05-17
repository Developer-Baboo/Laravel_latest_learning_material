<?php

namespace App\Http\Controllers;

// 1st Method
use App\Rules\Uppercase;
use Illuminate\Http\Request;

// 2nd method
use Closure;
use Illuminate\Support\Facades\Validator;

class customValidation extends Controller
{
    public function custom_validation(Request $request){
        /* $validate = $request->validate([

            // square brackets is necessary for custom validation rules
            'username' => ['required', new Uppercase],
            'useremail' => 'required|email',
        ]); */

        $validate = $request->validate([
            // square brackets is necessary for custom validation rules
            'username' => ['required',
             function(string $attribute, mixed $value, Closure $fail){
                if(strtoupper($value) !==$value ){
                    $fail('The :attribute must be uppercase.');
                }
            }],
            'useremail' => 'required|email',
        ]);


        return $request->all();
    }
}
