<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;

class UserController extends Controller
{
   /*  public function addUser(Request $req)
    {
        $req->validate([
            'username' => 'required',
            'useremail' => 'required|email',
            'userpass' => 'required|alpha_num| min:6',
            'userage' => 'required | numeric | between: 18, 21',
            'usercity' => 'required',
        ],[
            "username.required" => 'User Name is required',
            "useremail.required" => 'User Email is required',
            "useremail.email" => 'Enter correct email address',
            "userage.required" => 'User Age is required',
            "userage.numeric" => 'User Age must be numeric',
            "userage.min:18" => 'User age should not less than 18 years old.',
            "usercity.required" => 'User City is required',
        ]);

        return $req->all();

    } */

    public function addUser(UserRequest $req)
    {
        // Sb ka data chaheya
        // return $req->all();

        // particular colum ka data chaheya
        // return $req->only(['username', 'usercity']);

        // kin kin columns ka data chaheya
        return $req->except(['username', 'usercity']);

    }
}
