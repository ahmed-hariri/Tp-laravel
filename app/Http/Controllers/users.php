<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class users extends Controller
{
    public function GetUsers() {
        $users = [
            ["id" => 0 , "name" => "ahmed"],
            ["id" => 1 , "name" => "mohamed"],
            ["id" => 2 , "name" => "salah"],
            ["id" => 3 , "name" => "ali"],
            ["id" => 4 , "name" => "yassine"],
            ["id" => 5 , "name" => "ahmed"],
        ];
        return view("users", compact("users"));
    }
}
