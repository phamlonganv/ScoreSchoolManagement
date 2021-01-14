<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ClassRoom;

class ClassRoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for ($i=1; $i <30 ; $i++) {
            if($i<=10)
            {
                ClassRoom::create(
                    [
                       'name'=>'10A'.$i.'',
                       'is_special'=>'0'
                    ]
                );
            }
            else if ($i>10 && $i<=21)
            {
                ClassRoom::create(
                    [
                       'name'=>'11A'.($i-10).'',
                       'is_special'=>'0'
                    ]
                );
            }
            else
            {
                ClassRoom::create(
                    [
                       'name'=>'12A'.($i-20).'',
                       'is_special'=>'0'
                    ]
                );
            }
        }

    }
}
