<?php

namespace App\Http\Controllers;

use App\Models\employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PublicController extends Controller
{
    public function home(){
        $employees = employee::orderBy('hours', 'desc')->get();
        return view('table', compact('employees'));
    }


    public function project(){
        $employees = employee::select('name', DB::raw('SUM(hours) as total_sales '))->groupBy('name')->get();
        return view('project', compact('employees'));
    }

    public function project_employee(){
        $employees = employee::select('name', 'employee_name', DB::raw('SUM(hours) as total_sales '))->groupBy('name', 'employee_name')->get();
        return view('project_employee', compact('employees'));
    }

    public function employee_project(){
        $employees = employee::select('name', 'employee_name', DB::raw('SUM(hours) as total_sales '))->groupBy('name', 'employee_name')->get();
        return view('employee_project', compact('employees'));
    }
}

// SELECT `name` FROM employees GROUP BY `name`;
// SELECT SUM(hours) FROM employees
