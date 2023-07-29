<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LessonsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create();
        for ($i = 0; $i < 10; $i++) {
            DB::table('lessons')->insert([
                'lessonName' => 'Đề '.$faker->randomDigitNotNull(),
                'answerTime' => $faker->numberBetween(1, 1000),
                'userCreatedId' => $faker->numberBetween(1, 11),
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ]);
        }
    }
}
