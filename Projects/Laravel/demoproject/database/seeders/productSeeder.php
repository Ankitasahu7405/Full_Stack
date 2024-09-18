<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\product;

class productSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker= Faker::create();
        
        for($i=1;$i<=100;$i++)
        {
            $data=new product();
            $data->prod_name=$faker->prod_name;
            $data->prod_desc=$faker->prod_desc;
            $data->prod_price=$faker->prod_price;
			$data->prod_qunt=$faker->prod_qunt;
            $data->save();
        }
    }
}
