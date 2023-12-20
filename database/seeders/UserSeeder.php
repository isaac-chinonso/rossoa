<?php

namespace Database\Seeders;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1,100) as $index) {
            DB::table('users')->insert([
                'email' => $faker->unique()->safeEmail,
                'role_id' => 2,
                'status' => 1,
                'password' => bcrypt('password'),
            ]);
        }
    }
}
