<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserEloquent extends Model
{
    use HasFactory;
    protected $table = 'users';
    protected $timestamp = false;

    // comment on gruarded or fillable to save data of mass assignment
    // protected $guarded = [];

    protected $fillable = ['name','email','age','city'];

}
