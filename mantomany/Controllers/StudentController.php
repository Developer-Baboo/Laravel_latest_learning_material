<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     // FOR ONE TO ONE RELATIONSNHIP
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

    // For one to many rel
    public function show1(){
        // $students = Student::with('book')->get();

        /* $students = Student::with('book')->find(11);

        we can write above line in below way
        $students = Student::find(11);
        $posts = $students->book; */


        // fetch those record who haven't issued any book
       /*  $students = Student::doesntHave('book')->get();
        return $students; */

        // fetch those record who have issued any single book
        /* $students = Student::has('book')->get();
        return $students; */

        // Unhooon na konse konse book issue krvia han
       /*  $students = Student::has('book')->with('book')->get();
        return $students; */

        // jis students ka 2 ka brabr ya 2 sa zyda book issue krvia han
        /* $students = Student::has('book', '>', 2)->with('book')->get();
        return $students; */

        // count btia ka kitne kitne book issue kria han users na
       /*  $students = Student::withCount('book')->get();
        return $students; */

        // get fix columns
        /* $students = Student::select(['name', 'gender'])
                    ->withCount('book')
                    ->get();
        return $students; */


    }

    // For many to many relationships
    function show123(){
        // dd("testing");

        /* // 12 wala din ko kitna role assigned han
        $students = Student::find(12);
        return $students->roles;
        foreach ($students->roles as $role) {
            echo $role->role_name. "<br />";
        } */

       /*  // hr student ka necha us ka role ho
        $students = Student::get();
        foreach ($students as $student) {
            echo $student -> name."<br />";
            echo $student -> age."<br />";
            foreach ($student->roles as $role) {
                echo $role->role_name. "<br />";
            }
            echo "<hr>";
        } */



    }
    /**
     * Show the form for creating a new resource.
     */

    //  When we have to insert the data in 2 tables at same time
    public function create()
    {
        /* $student = Student::create([
            'name' => 'baboo',
            'age' => 22,
            'gender' =>'male'
        ]);

        $student->contact()->create([
            'email' => 'baboo',
            'phone' => '9988776',
            'address' => '#654 JA Road',
            'city' => 'mithi'
        ]); */


        //------------------------- One to Many Relationship-----------------------------
        /* $book = new Book([
            'book' => 'Hellen Keller',
            'date'  => '2024-05-21',
        ]);

        $student = Student::find(12);
        $student->book()->save($book); */

        // another way of inserting data

       /*  $student = Student::find(20);
        $student->book()->create([
            'book'=> 'shah jo risalo',
            'date' => '2024-05-21',
        ]); */


        //------------------------- Many to Many Relationship-----------------------------
        /*
        existing student 13 ko ek naya role dana ha, jis ko role nhi mila ha
        $student = Student::find(13);
        $student->roles()->attach(1); */

        // id 13 ko 3 role dana han

        /* // existing student 13 ko 2 naya role dana ha, jis ko role nhi mila ha
        $student = Student::find(13);
        $roles = [1,3];
        $student->roles()->attach($roles); */

        /* // existing users of id 13 sa koe role of id 3 htana/remove krna ha
        $student = Student::find(13);
        $student->roles()->detach(3); */

        // existing users of id 20 sa sara role htana/remove krna hoon
       /*  $student = Student::find(20);
        $student->roles()->detach(); */

        // existing user jis ko pehla assign nhi tha, usko 2 role assign kraga
        /* $student = Student::find(20);
        $roles = [1,4];
        $student->roles()->sync($roles); */

        // exisitng user ka already assigned 2 roles ko update kraga
        /* $student = Student::find(20);
        $roles = [1,3];
        $student->roles()->sync($roles); */

        // exisitng user ka already assigned 2 roles man sa ek reomove hojaya
       /*  $student = Student::find(20);
        $roles = [1];
        $student->roles()->sync($roles); */


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
