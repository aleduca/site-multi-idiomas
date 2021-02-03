<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory;

class PostenUsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();

        $users = User::all()->pluck('id')->toArray();

        for ($i = 1;$i < 20;$i++) {
            $sentence = $faker->sentence(10);
            DB::table('postsenUS')->insert([
                'title' => $sentence,
                'user_id' => $faker->randomElement($users),
                'slug' => $faker->slug,
                'content' => $faker->text()
            ]);
        }
    }
}
