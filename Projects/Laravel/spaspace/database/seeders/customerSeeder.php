<?php

namespace Database\Seeders;

use App\Models\customer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
Use Faker\Factory as faker;

use Hash;

class customerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $faker= Faker::create();
	   
		for($i=1;$i<=100;$i++)
		{
			$data=new customer;
			$data->name=$faker->name;
			$data->email=$faker->email;
			$data->password=Hash::make($request->password);
			$data->address=$faker->address;
			$data->mobile=$faker->mobile;
			$data->file='image.png';
			//$data->status='Unblock';
			$data->cid='4';
			$data->save();
		}
 
    }
}
