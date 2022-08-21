<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // ลบข้อมูลเก่าออกไปก่อน
        DB::table('products')->delete();

        $data = [
            [
                'name' => 'Samsung Galaxy S21',
                'slug' => 'samsung-galaxy-s21',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum eum neque sunt maxime laboriosam, dolore necessitatibus sint aut rem deserunt reprehenderit. Praesentium dolorum ex a dolores recusandae unde, tempore asperiores',
                'price' => 18500.00,
                'image' => 'https://via.placeholder.com/800x600.png/005429?text=samsung',
                'user_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];

        Product::insert($data);

        // ทำการเรียกตัว ProductFactory ที่จะทำงาน Facker ข้อมูลให้
        Product::factory(4999)->create();
    }
}
