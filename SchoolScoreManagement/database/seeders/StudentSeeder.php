<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Student;
use App\Models\ClassRoom;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $classes = ClassRoom::all();
        $arClass = array();
        foreach($classes as $classs)
        {
            array_push($arClass,$classs->id);
        }
        $eRan = array_rand($arClass, 1);
        Student::create(
            [
                'name'=>'Long An',
                'age'=>'20',
                'classes_id'=>''.$eRan.'',
                'parent_phone'=>'0911516305',
                'address'=>'53 Tan Chanh Hiep,TPHCM'
            ]
        );
    }
}
