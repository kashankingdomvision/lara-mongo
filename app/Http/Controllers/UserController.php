<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Book;
use Maklad\Permission\Models\Role;
use Maklad\Permission\Models\Permission;

class UserController extends Controller
{
    public function index(){
        // dd("user here");


        $user = Book::all();
        dd($user);

        // $user = new User;
        // $user->name   = "kashan";
        // $user->email  = "kashan.kingdomvision@gmail.com";
        // $user->save();
        // dd("user saved");


        // $user = User::where("email","kashan.kingdomvision@gmail.com")->first();
        // $user->givePermissionTo('edit articles');
        // dd($user);


        // $role = Role::create(['name' => 'writer']);
        // $permission = Permission::create(['name' => 'edit articles']);



        // $role = Role::findByName('writer');
        // $role->givePermissionTo('edit articles');

        // dd($role);

        // $user = new User;
        // $book = new Book();
        // $book->name   = "kashan";
        // $book->detail = "computer book";
        // $book->save();
        // return "Done";

        // $book = new Book();
        // $book->name   = "kashan";
        // $book->detail = "computer book";
        // $book->type = "computer book";
        // $book->save();


        // return "Done";

        // $book = Book::get()->toArray();
        // // dd($book);
        // echo "<pre>";
        // print_r($book);
        // echo "</pre>";
        // die;

    }
}
