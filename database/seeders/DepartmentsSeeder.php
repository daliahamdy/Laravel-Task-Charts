<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DepartmentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('Departments')->insert([
            'DepartmentName'=>'HR',
            'EmpolyessCount'=> '2'
       ]);
        DB::table('Departments')->insert([
            'DepartmentName'=>'Sales',
            'EmpolyessCount'=> '20'
       ]);
        DB::table('Departments')->insert([
            'DepartmentName'=>'Finance',
            'EmpolyessCount'=> '15'
        ]);
        DB::table('Departments')->insert([
            'DepartmentName'=>'Marketing',
            'EmpolyessCount'=> '30'
   
        ]);  DB::table('Departments')->insert([
            'DepartmentName'=>'Purchase',
            'EmpolyessCount'=> '9'
          
        ]);  DB::table('Departments')->insert([
            'DepartmentName'=>'Operations',
            'EmpolyessCount'=> '5'
        ]);
    }
}
