<?php

use Illuminate\Database\Seeder;
use App\Blood_type;

class BloodTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Blood_type::create([
                         'type' => 'A+',
      
        ]);
        Blood_type::create([
                         'type' => 'A- ',
          

        ]);
        Blood_type::create([
                         'type' => 'B+',
        

        ]);
        Blood_type::create([
                         'type' => 'B-',
           
        ]);
        Blood_type::create([
                          'type' => 'O+',
            
        ]);
        Blood_type::create([
                            'type' => 'O-',
        ]);
        Blood_type::create([
                            'type' => 'AB+',
      ]);
      Blood_type::create([
                           'type' => 'AB-',
       ]);
    }
    
}
