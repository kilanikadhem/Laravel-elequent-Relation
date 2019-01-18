<?php

use Illuminate\Database\Seeder;
use App\phone;
class PhoneTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        phone::truncate();

        $faker = \Faker\Factory::create();
        for($i=1;$i <= 10;$i++){
            phone::create([
                'phone'=>$faker->sentence,
                'user_id'=>$i
            ]);
        }
    }
}
