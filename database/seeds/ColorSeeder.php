<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('colors')->insert([
            'name_ar' => 'أحمر',
            'name_en' => 'Red',
            'display' => '1',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('colors')->insert([
            'name_ar' => 'برتقالى',
            'name_en' => 'Orange',
            'display' => '1',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('colors')->insert([
            'name_ar' => 'أصفر',
            'name_en' => 'Yellow',
            'display' => '1',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('colors')->insert([
            'name_ar' => 'أخضر',
            'name_en' => 'Green',
            'display' => '1',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('colors')->insert([
            'name_ar' => 'أزرق',
            'name_en' => 'Blue',
            'display' => '1',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('colors')->insert([
            'name_ar' => 'نيلى',
            'name_en' => 'Indigo',
            'display' => '1',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('colors')->insert([
            'name_ar' => 'بنفسجى',
            'name_en' => 'Violet',
            'display' => '1',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
