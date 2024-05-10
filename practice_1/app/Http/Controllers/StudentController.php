<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     /* for join please make sure, two tables must have same colum names and total column name must be same */
    public function unionData(){
       /*  $lecturers = DB::table('lecturers')
                        ->select('lecturers.name as name', 'lecturers.age as age', 'cities.name as city_name')
                        ->join('cities', 'lecturers.city', '=', 'cities.id')
                        ->where('cities.name', '=','sindh');
 */
        /* $students = DB::table('students')
                        ->select('students.name as name', 'students.age as age', 'cities.name as city_name')
                        ->union($lecturers)
                        ->join('cities', 'students.city', '=', 'cities.id')
                        ->get(); */

        // toSql() method:Get the SQL representation of the query.
        /* $students = DB::table('students')
                        ->select('students.name as name', 'students.age as age', 'cities.name as city_name')
                        ->union($lecturers)
                        ->join('cities', 'students.city', '=', 'cities.id')
                        ->where('city_name', '=','karachi')
                        ->toSql(); */
        /* output:

        (select `students`.`name` as `name`, `students`.`age` as `age`, `cities`.`name` as `city_name` from `students` inner join `cities` on `students`.`city` = `cities`.`id`) union (select `lecturers`.`name` as `name`, `lecturers`.`age` as `age`, `cities`.`name` as `city_name` from `lecturers` inner join `cities` on `lecturers`.`city` = `cities`.`id`)
        */

        /* $students = DB::table('students')
                        ->select('students.name as name', 'students.age as age', 'cities.name as city_name')
                        ->union($lecturers)
                        ->join('cities', 'students.city', '=', 'cities.id')
                        ->where('cities.name', '=','karachi')
                        ->get(); */

        // note: We can't use alias in where calause like ->where('city_name', '=','karachi')  you can use the original column name or expression in the where clause







        // return $students;
    }

    // WhenMethod
   /*  public function whenData(){
        $test = true;
        $students = DB::table('students')
                    //when man agr true hoga to aga wala condition chlagi otherwise dosre function call hoga
                    ->when($test, function ($query){ //Query variable man upper $students ka sara data ajayaag
                        $query->where('age', '>', 20);
                    }, function($query){
                        $query->where('age', '>', 30);
                    })
                    ->get();
        return $students;
    } */

    // Chunk Data

    /* public function chunkData(){
        $students = DB::table('students')
                        ->orderBy('id')
                        ->chunk(2, function($students){
                        echo "<div style='border: 5px solid red; margin-bottom:15px;'>";
                        foreach($students as $student){
                            echo $student->name.'<br>';
                        }
                        echo "</div>";
        });
        return $students;
    } */


    // Wen can update the chunk Data

    public function chunkData(){
        $students = DB::table('students')
                        ->orderBy('id')
                        ->chunkById(2, function($students){
                        // echo "<div style='border: 5px solid red; margin-bottom:15px;'>";
                        foreach($students as $student){
                            DB::table('students')
                                ->where('id', $student->id)
                                ->update(['status'=>true]);
                        }
                        // echo "</div>";
        });
        return $students;
    }


    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }


}
