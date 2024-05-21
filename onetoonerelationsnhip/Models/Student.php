<?php

namespace App\Models;

use App\Models\Contact;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Student extends Model
{
    use HasFactory;
    protected $guarded = [];
    public $timestamps = false;


    public function contact()
    {
        // dd("testing");
        // return $this->hasOne(Contact::class, 'student_id', 'id');
        return $this->hasOne(Contact::class);
    }
}
