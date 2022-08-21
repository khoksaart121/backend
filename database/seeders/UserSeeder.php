<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
        // ลบข้อมูลเก่าออกไปก่อน
        DB::table('users')->delete();

        $data = [
            'fullname' => 'Chinnawat Kota',
            'username' => 'khoksaart121',
            'email' => 'khoksaart121@gmail.com',
            'password' => Hash::make('123456'),
            'tel' => '0656809799',
            'avatar' => 'https://via.placeholder.com/400x400.png/005429?text=udses',
            'role' => '1',
            'remember_token' => 'XBWyakeoao',
        ];

        User::create($data);

        // ทำการเรียกตัว UserFactory ที่จะทำงาน Facker ข้อมูลให้
        User::factory(99)->create();
    }
}
