<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::create(
            [
                'name'=>'Long Ẩn',
                'email'=>'zockkidpro@gmail.com',
                'password'=>'$2y$10$ZX5KiN65WkyIMEyl0SCAlet53UAFrRDYeUqEDk6z0vVmoarTlhKkm',
                'role_id'=>'1',
                'idcard'=>'251220819'
            ]
        );
        User::create(
            [
                'name'=>'Long Ẩn',
                'email'=>'anlongpham1405@gmail.com',
                'password'=>'$2y$10$ZX5KiN65WkyIMEyl0SCAlet53UAFrRDYeUqEDk6z0vVmoarTlhKkm',
                'role_id'=>'2',
                'idcard'=>'251220811'
            ]
        );
    }
}
