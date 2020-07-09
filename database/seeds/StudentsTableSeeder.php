<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Student;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 10; $i++) {
            $new_student = new Student();
            $new_student->name = $faker->word;
            $new_student->lastname = $faker->word;
            $new_student->serial = $faker->unique()->text(6);
            $new_student->email = $faker->unique()->freeEmail;
            $new_student->save();
        }
    }
}
