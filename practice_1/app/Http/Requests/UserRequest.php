<?php

namespace App\Http\Requests;

use Illuminate\Support\Str;
use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'username' => 'required',
            'useremail' => 'required|email',
            'userpass' => 'required|alpha_num| min:6',
            'userage' => 'required | numeric | between: 18, 21',
            'usercity' => 'required',
        ];
    }

    // messages laravel ka built in name ha
    // ya hmara khud ka message han
   /*  public function messages(){
        return [
            "username.required" => 'User Name is required',
            "useremail.required" => 'User Email is required',
            "useremail.email" => 'Enter correct email address',
            "userage.required" => 'User Age is required',
            "userage.numeric" => 'User Age must be numeric',
            "userage.min:18" => 'User age should not less than 18 years old.',
            "usercity.required" => 'User City is required'
        ];
    } */

    // attributes laravel khud k aha
    // ya message larvel khud ka han
    public function attributes()
    {
        return [
            'username' => 'User Name',
            'useremail' => 'User Email',
            'userpass' => 'User Password',
            'userage' => 'User Age',
            'usercity' => 'User City',
        ];
    }


    // user jb form fill kra to wo data kis format man save ho in dbms
    protected function prepareForValidation()
    {
        $this->merge([
            // 'username' => strtoupper($this->username), //name upper case man save hoga
            // 'username' => Str::slug($this->username) // name ka becha mna space ayagi
        ]);
    }

    // It is super Global Variables
    protected $stopOnFirstFailure = true;
}
