<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Book;


class UserController extends Controller
{
    public function index(){
        // dd("user here");

        // $user = new User;
        // $book = new Book();
        // $book->name   = "kashan";
        // $book->detail = "computer book";
        // $book->save();
        // return "Done";

        $book = Book::all();
        dd($book);

    }
}
