<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserFormController extends Controller
{
    public function showUser(Request $req){
       #return $req -> input(); {"firstName":"Adam","lastName":"Susz"}
       #return $req -> input("firstName");  Adam
       #return $req -> path(); UserFormController
       #return $req -> url();  http://127.0.0.1:8000/UserFormController
       #return $req -> method();  GET
       #return $req -> all(); {"firstName":"Adam","lastName":"Susz"}


       $dataUser = [
        "firstName" => $req->input("firstName"),
        "lastName"=> $req->input("lastName")
       ];

       return view("user",["user" => $dataUser]);

    }
}
