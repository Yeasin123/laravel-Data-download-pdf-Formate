<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;


class EmployeeController extends Controller
{
    public function allEmployee()
    {
        $emp = Employee::all();
        return view('allEmployee',compact('emp'));
    }
    public function downloadPDF()
    {
        $emp = Employee::all();
        $pdf = \PDF::loadView('allEmployee',compact('emp'));
        return $pdf->download('employee.pdf');
    }

  
    
   
   
}
