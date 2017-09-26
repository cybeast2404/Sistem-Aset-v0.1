<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\UserProfiles;

class usertableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        foreach(range(1,10) as $index)
        {

        	 DB::table('asset_items')->insert([
            'asset_id' => 1,
            'asset_no' => str_random(5),
            'location' => str_random(8),
            'date_purchase' => '2017'.'-'.str_random(2).'-'.str_random(2),
            'price' => str_random(3).'.00',


            ]);
        }
    }
}
