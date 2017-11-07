<?php

use Illuminate\Database\Seeder;

class OrderCutTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ordercuts')->insert([
            'orderID' => '00001',
            'typeCloth' => 'TC',
            'OrderCutID' => '00010',
            'ColorID' => '001',
            'EmployeeCutID' => '1234567890',
            'total' => 200,   
            'StartDate' => '2017-01-20',
            'EndDate' => '2017-01-25',        
            'current_complete' => 50,
        ]);
        DB::table('ordercuts')->insert([
            'orderID' => '00002',
            'typeCloth' => 'TC',
            'OrderCutID' => '00011',
            'ColorID' => '002',  
            'EmployeeCutID' => '1234567890',          
            'total' => 200,   
            'StartDate' => '2017-01-20',
            'EndDate' => '2017-01-25',        
            'current_complete' => 50,
        ]);
        DB::table('ordercuts')->insert([
            'orderID' => '00003',
            'typeCloth' => 'TC',
            'OrderCutID' => '00012',
            'ColorID' => '003', 
            'EmployeeCutID' => '1234567890',           
            'total' => 200,   
            'StartDate' => '2017-01-20',
            'EndDate' => '2017-01-25',        
            'current_complete' => 50,
         ]);
    }
}