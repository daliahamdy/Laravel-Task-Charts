<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use resources\views;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

class DepartmentController extends Controller
{
    public function index()
    {
       $Departments = DB::table('Departments')->get();
        return view('Department', compact('Departments'));  
    }

    public function GetALLDepartments() 
    {
        $post = DB::table('Departments')->get('*')->toArray();
        foreach($post as $row)
         {
           $data[] = array
           (
            'label'=>$row->DepartmentName,
            'y'=>$row->EmpolyessCount
           ); 
         }
      return view('Chart', compact ('data'));
     // return view('Chart');
   } 

}