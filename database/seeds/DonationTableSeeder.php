<?php

use Illuminate\Database\Seeder;
use App\Donation;


class DonationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Donation::create([
            'name' =>'radya',
            'client_id'=> '1',
            'contact'=> '022418935',
            'hospital'=> 'القصر العيني',
            'longitude'=> '7',
            'latitude'=> '5',
            'blood_type_id'=>'1',
            'age'=>'16',
            'notes'=>'احتاج نقل خمسه كيلو ههه',
            'nbags'=>'2',
            'city_id'=>'1',
        ]);
        Donation::create([
            'name' =>'أم هاني',
            'client_id'=>'1',
            'contact'=>'22564891',
            'hospital'=>'برضو هه القصر العيني',
            'longitude'=>'9',
            'latitude'=>'1',
            'blood_type_id'=>'2',
            'age'=>'50',
            'notes'=>'احتاج نقل سته بقي كيلو ههه',
            'nbags'=>'5',
            'city_id'=>'3',
        ]);
    }
}
