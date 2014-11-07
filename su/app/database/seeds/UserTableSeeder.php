<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class UserTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

        User::create([
            'first_name'=> 'admin',
            'last_name' => 'admin@hotmail',
            'password' => \Hash::make('1234'),
            'email' => 'admin',
            'slug' => \Str::slug('admin'),
            'id_rol' => 1,
            'activated'=> true,
            'c_dom'=>false,
            'c_cor'=>false,
            'id_ctacor'=>$faker->randomElement([1,2,3,4,5,6]),
            'id_ctareg'=>$faker->randomElement([1,2,3,4,5,6]),
            'c_chat'=>false,
            'c_call'=>false,
            'c_mail'=>false,
            'c_cobra'=>false
        ]);

		foreach(range(1, 50) as $index)
		{
            $NameUs =$faker->name;
			User::create([
                'first_name'=> $NameUs,
                'last_name' => $faker->lastName,
                'password' => \Hash::make('1234'),
                'email' => $faker->email,
                'slug' => \Str::slug($NameUs),
                'id_rol' => $faker->randomElement([1,2,3,4,5,6]),
                'activated'=> true,
                'c_dom'=>false,
                'c_cor'=>false,
                'id_ctacor'=>$faker->randomElement([1,2,3,4,5,6]),
                'id_ctareg'=>$faker->randomElement([1,2,3,4,5,6]),
                'c_chat'=>false,
                'c_call'=>false,
                'c_mail'=>false,
                'c_cobra'=>false
			]);
		}
	}

}