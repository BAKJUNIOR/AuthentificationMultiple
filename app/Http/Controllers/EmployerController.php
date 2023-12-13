<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployerController extends Controller
{
    //
    public function employerDashboard(){
        return view('employer.employer_dashboard');
    }
}
