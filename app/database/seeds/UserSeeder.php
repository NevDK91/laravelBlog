<?php

class UserSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
		//Eloquent::unguard();

		public function run()
    {

$confirmation_code = str_random(30);
       User::create(array(
                'id' => null,
                'name' => "nevdk",
                'password' => Hash::make("114948"),
                'email' => "mrblond.rivz@yandex.ru",
                'avatar' => "http://s1.cdnnz.net/var/news/2012/11/22/51906_dzhejk-dzhillenxol_or_jake.jpg",
                'confirmation_code' => $confirmation_code,
                'fio' =>  "Дмитрий Кухарчук",
                'about' => "пёрсын"

        ));    



    	/*$faker = Faker\Factory::create('ru_RU');
    	$faker->addProvider(new Faker\Provider\ru_RU\Person($faker));
    	$faker->addProvider(new Faker\Provider\ru_RU\Internet($faker));
    	$faker->addProvider(new Faker\Provider\Image($faker));
    	$faker->addProvider(new Faker\Provider\ru_RU\Text($faker));

    	DB::table('users')->truncate();
    	for($i=0;$i<=20;$i++){

        User::create(array(
                'id' => null,
                'name' => $faker->userName,
                'password' => $faker->password,
                'email' => $faker->email,
                'avatar' => $faker->imageUrl(100, 100, 'people'),
                'fio' =>  $faker->firstName." ".$faker->lastName,
                'about' => $faker->realText(200)

        ));    

    	}*/
    }
/*
		$user = new User;
		$user->name = "Admin";
		$user->email = "admin@mail.earth";
		$user->password = "adminchik";
		$user->avatar = "http://www.wallplanet.ru/_ph/3/160189499.jpg";
		$user->fio = "Админ Админчук";
		$user->about = "Персона интереса";

		$user->save();
	}*/

}
