<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class TestController extends Controller
{
    public function index()
    {
        return 'Test page';
    }

    public function contact()
    {
        return 'Contact page';
    }



    // Rename funtion as index and move to the bookcontroller
    public function book()
    {

        //we ask the model to give us a list of authors for this book
        $books = DB::select('SELECT * FROM book');
        return view('myfolder.book', ['books' => $books]);
    }
}



