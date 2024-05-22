<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Student;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Book kis na issue kya ha us student ks sath man data lio
        /* $book = Book::with('student')->get();
        return $book; */

        /* $book = Book::with('student')->find('11');
        return $book; */

        /* echo $books->book. "<br>";
        echo $books->date. "<br>";
        echo $books->student->name. "<br>"; */

        /* $book = Book::with('student')->find(11);
        if ($book) {
            echo "<div style='border:3px solid red; margin:0 0 10px'>
                <h3>{$book->book}</h3>
                <span>{$book->date}</span>
                <p>{$book->student->name}</p>
            </div>";
        } else {
            echo "Book not found.";
        } */


       /*  $books = Book::with('student')->get();
        if ($books->isNotEmpty()) {
            foreach ($books as $book) {
                echo "<div style='border:3px solid red; margin:0 0 10px'>
                    <h3>{$book->book}</h3>
                    <span>{$book->date}</span>
                    <p>{$book->student->name}</p>
                </div>";
            }
        } else {
            echo "No books found.";
        } */


        // filter book ka ya book kis na issue krvia ha
        /* $books = Book::with('student')
                        ->where('book', 'ABC')
                        ->get();
        return $books; */

        // particular bnda ka konse posts likhe han, it will show eror
        /* $books = Book::with('student')
                        ->where('name', 'Prof. Lorenza Beier')
                        ->get();
        return $books; */


        // particular student ka konse boook issue krvia han han
        /* $books = Book::withWhereHas('student', function($query){
            $query->where("name", 'Prof. Lorenza Beier');
        })->get();

        return $books; */


        // 2 student s na konse boook issue krvia han han
        /* $books = Book::with('student')->whereHas('student', function($query) {
            $query->where('name', 'Prof. Lorenza Beier')
                  ->orWhere('name', 'Dr. Denis Wiza');
        })->get();

        return $books; */

        // another way ka Dr. Denis Wiza na konse book issue kria han
       /*  $students = Student::where('name', 'Dr. Denis Wiza')->get();
        $books = Book::whereBelongsTo($students)->get();
        return $books; */










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
