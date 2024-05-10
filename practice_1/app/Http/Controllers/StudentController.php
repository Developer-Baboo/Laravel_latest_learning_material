<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function unionData(){
        $lecturers = DB::table('lecturers')
                        ->select('lecturers.name as name', 'lecturers.age as age', 'cities.name as city_name')
                        ->join('cities', 'lecturers.city', '=', 'cities.id');

        $students = DB::table('students')
                        ->select('students.name as name', 'students.age as age', 'cities.name as city_name')
                        ->union($lecturers)
                        ->join('cities', 'students.city', '=', 'cities.id')
                        ->get();

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
