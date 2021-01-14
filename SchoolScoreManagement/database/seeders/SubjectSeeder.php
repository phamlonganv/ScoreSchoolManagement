<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Subject;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Subject::create(
            [
                'name'=>'Toán',
            ]
        );
        Subject::create(
            [
                'name'=>'Lý',
            ]
        );
        Subject::create(
            [
                'name'=>'Hóa',
            ]
        );
        Subject::create(
            [
                'name'=>'Anh',
            ]
        );
        Subject::create(
            [
                'name'=>'Sinh',
            ]
        );
        Subject::create(
            [
                'name'=>'Sử',
            ]
        );
        Subject::create(
            [
                'name'=>'Địa',
            ]
        );
        Subject::create(
            [
                'name'=>'Công Dân',
            ]
        );
        Subject::create(
            [
                'name'=>'Giáo Dục Quốc Phòng',
            ]
        );
        Subject::create(
            [
                'name'=>'Tin Học',
            ]
        );
        Subject::create(
            [
                'name'=>'Công Nghệ',
            ]
        );
        Subject::create(
            [
                'name'=>'Ngữ Văn',
            ]
        );
    }
}
