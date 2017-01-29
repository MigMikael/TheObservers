<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class ProblemTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('problems')->insert([
            'name' => "Khai-Thod",
            'content' => 'อาหารที่เกิดขึ้นจากการตอก <b>ไข่</b> ใส่กระทะเรียกว่า?',
            'answer' => 'ไข่ดาว',
            'point' => 0,
            'is_show' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
