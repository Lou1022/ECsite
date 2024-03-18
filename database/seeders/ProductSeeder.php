<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => 'ProTech ゲーミングマウス',
            'price' => '4500',
            'main_image' => 'nothing',
            'description' => '高精度センサーとカスタマイズ可能なボタンを備えたゲーミングマウス。快適なグリップ感と反応速度で、ゲームのパフォーマンスを向上させる。',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'amount' => '25',
            'category_id' => '1',
        ]);
    }
}
