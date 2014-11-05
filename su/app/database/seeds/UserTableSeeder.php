<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class UserTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 50) as $index)
		{
            $NameUs =$faker->name;
			User::create([
                'first_name'=> $NameUs,
                'last_name' => $faker->lastName,
                'last_mon' => $faker->lastName,
                'username' => $faker->userName,
                'password' => \Hash::make('1234'),
                'email' => $faker->email,
                'slug' => \Str::slug($NameUs),
                'id_rol' => $faker->randomElement([1,2,3,4,5,6]),
                'activated'=> true
			]);
		}
	}

}