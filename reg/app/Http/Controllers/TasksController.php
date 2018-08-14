<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\course;

class TasksController extends Controller
{
    public function store (Request $request)
    {
    
        $course =new course;

        $course -> course_name =$request -> course;
        $course -> f_name =$request -> name;
        $course -> i_name =$request -> nameIn;
        $course -> certificate =$request ->NameApper; 
        $course -> bdate =$request ->datepicker; 
        $course -> passport =$request ->nic;
        $course -> gender =$request ->Gender;
        $course -> language =$request ->lan;
        $course -> address =$request ->add;
        $course -> telephone =$request ->Tele;

        $course -> save();



       ;  
    }


}

