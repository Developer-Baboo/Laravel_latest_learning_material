<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        /* // $students = Student::all();
        $students = Student::with('contact')->get();
        dd($students);
        return $students; */
        /* $students = Student::with('contact')->find(11);
        echo $students->name . "<br/>";
        echo $students->contact->email . "<br/>"; */


        /* $students = Student::with('contact')
                            ->where('gender', 'female')
                            ->get();
        return $students; */


        /* $students = Student::with('contact')
                            ->where('city', 'Richieside')
                            ->get();
        return $students;
        throw error ka city column not found in student table
        */


        /* // agr hum dosre table sa data ko filter out krna ho
        $students = Student::withWhereHas('contact', function($query){
            $query->where('city', 'Richieside');
        })->get();
        return $students; */


       /*  // agr hum pehla and dosre table sa data ko filter out krna ho
        $students = Student::where('gender', 'male')->withWhereHas('contact', function($query){
            $query->where('city', 'Richieside');
        })->get();
        return $students; */


        /*  // agr hum pehla and dosre table sa data ko filter out krna ho lekin dosre table ka data show na kravana ho, sirf pehla table student ka data show kraga
         $students = Student::where('gender', 'male')->whereHas('contact', function($query){
            $query->where('city', 'Richieside');
        })->get();
        return $students; */


    }

    /**
     * Show the form for creating a new resource.
     */

    //  When we have to insert the data in 2 tables at same time
    public function create()
    {
        $student = Student::create([
            'name' => 'baboo',
            'age' => 22,
            'gender' =>'male'
        ]);

        $student->contact()->create([
            'email' => 'baboo',
            'phone' => '9988776',
            'address' => '#654 JA Road',
            'city' => 'mithi'
        ]);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        //
    }
}
