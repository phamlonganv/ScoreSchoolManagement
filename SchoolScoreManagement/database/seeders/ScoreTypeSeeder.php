<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ScoreType;
class ScoreTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        ScoreType::create(
            [
                'name'=>'1 Tiết',
            ]
        );
        ScoreType::create(
            [
                'name'=>'15 Phút',
            ]
        );
        ScoreType::create(
            [
                'name'=>'Miệng',
            ]
        );
        ScoreType::create(
            [
                'name'=>'Học Kì',
            ]
        );
    }
}
