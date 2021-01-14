<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Semester;
class SemesterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Semester::create(
            [
                'name'=>'Học kì 1',

            ]
        );
        Semester::create(
            [
                'name'=>'Học kì 2',

            ]
        );
    }
}
