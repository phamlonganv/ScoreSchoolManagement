<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Teacher;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Teacher::create(
            [
                'name'=>'Công Nghệ',
                'subject_id'=>'1',
                'user_id'=>'1',
            ]
        );
    }
}
