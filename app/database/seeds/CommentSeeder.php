<?php

class CommentSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
		//Eloquent::unguard();

		public function run()
    {
        
    	$faker = Faker\Factory::create('ru_RU');
    	$faker->addProvider(new Faker\Provider\ru_RU\Person($faker));
    	$faker->addProvider(new Faker\Provider\ru_RU\Internet($faker));
    	$faker->addProvider(new Faker\Provider\Image($faker));
    	$faker->addProvider(new Faker\Provider\ru_RU\Text($faker));
        $faker->addProvider(new Faker\Provider\Base($faker));
        $faker->addProvider(new Faker\Provider\DateTime($faker));
        $faker->addProvider(new Faker\Provider\Lorem($faker));

    	DB::table('comments')->truncate();
    	for($i=0;$i<=20;$i++){

        Comment::create(array(
                'id' => null,
                'id_post' => $faker->numberBetween($min = 1, $max = 20),
                'id_user' => $faker->numberBetween($min = 1, $max = 10),
                'body' => $faker->realText(500),
                'created_at' =>  $faker->dateTimeAD($max = 'now')

        ));   

    	}
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
