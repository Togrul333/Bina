<?php

namespace App\Http\Controllers;

use App\Models\House;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function dashboard()
    {
        $houses = House::get();
        return view('employee.home',compact('houses'));
    }

}
