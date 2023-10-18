<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function show(){
        return"kontroler ShowController";
    }

    public function showFirstName(){
        $date =[
            "firstName" => 'Janusz',
            "lastName" => "Nowak",
            "city" => "Poznań"
        ];
        return View("/data",$date);
    }
    

}
