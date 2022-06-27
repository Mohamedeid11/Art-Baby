<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('regions')->insert([
            'name_ar'       => 'العكر',
            'name_en'       => 'Al Eker',
            'display'       => '1',
            'created_at'    => date('Y-m-d H:i:s'),
            'updated_at'    => date('Y-m-d H:i:s'),
        ]);
        DB::table('regions')->insert([
            'name_ar'       => 'القدم',
            'name_en'       => 'Al Qadam',
            'display'       => '1',
            'created_at'    => date('Y-m-d H:i:s'),
            'updated_at'    => date('Y-m-d H:i:s'),
        ]);
        DB::table('regions')->insert([
            'name_ar'       => 'القرية',
            'name_en'       => 'Elqaraya',
            'display'       => '1',
            'created_at'    => date('Y-m-d H:i:s'),
            'updated_at'    => date('Y-m-d H:i:s'),
        ]);
        DB::table('regions')->insert([
            'name_ar'       => 'القضيبية',
            'name_en'       => 'Qudaibiya',
            'display'       => '1',
            'created_at'    => date('Y-m-d H:i:s'),
            'updated_at'    => date('Y-m-d H:i:s'),
        ]);
        DB::table('regions')->insert([
            'name_ar'       => 'قلالي',
            'name_en'       => 'Qalali',
            'display'       => '1',
            'created_at'    => date('Y-m-d H:i:s'),
            'updated_at'    => date('Y-m-d H:i:s'),
        ]);
        DB::table('regions')->insert([
            'name_ar'       => 'القلعة',
            'name_en'       => 'Al Qalah',
            'display'       => '1',
            'created_at'    => date('Y-m-d H:i:s'),
            'updated_at'    => date('Y-m-d H:i:s'),
        ]);
        DB::table('regions')->insert([
            'name_ar'       => 'كرانة',
            'name_en'       => 'Karranah',
            'display'       => '1',
            'created_at'    => date('Y-m-d H:i:s'),
            'updated_at'    => date('Y-m-d H:i:s'),
        ]);
        DB::table('regions')->insert([
            'name_ar'       => 'الحجر',
            'name_en'       => 'Al Hajar',
            'display'       => '1',
            'created_at'    => date('Y-m-d H:i:s'),
            'updated_at'    => date('Y-m-d H:i:s'),
        ]);
        DB::table('regions')->insert([
            'name_ar'       => 'كرباباد',
            'name_en'       => 'Karbabad',
            'display'       => '1',
            'created_at'    => date('Y-m-d H:i:s'),
            'updated_at'    => date('Y-m-d H:i:s'),
        ]);
        DB::table('regions')->insert([
            'name_ar'       => 'كرزكان',
            'name_en'       => 'Karzakan',
            'display'       => '1',
            'created_at'    => date('Y-m-d H:i:s'),
            'updated_at'    => date('Y-m-d H:i:s'),
        ]);
        DB::table('regions')->insert([
            'name_ar'       => 'الماحوز',
            'name_en'       => 'Mahooz',
            'display'       => '1',
            'created_at'    => date('Y-m-d H:i:s'),
            'updated_at'    => date('Y-m-d H:i:s'),
        ]);
        DB::table('regions')->insert([
            'name_ar'       => 'المالكية',
            'name_en'       => 'Malkiah',
            'display'       => '1',
            'created_at'    => date('Y-m-d H:i:s'),
            'updated_at'    => date('Y-m-d H:i:s'),
        ]);
        DB::table('regions')->insert([
            'name_ar'       => 'مدينة حمد',
            'name_en'       => 'Madinat Hamad',
            'display'       => '1',
            'created_at'    => date('Y-m-d H:i:s'),
            'updated_at'    => date('Y-m-d H:i:s'),
        ]);
        DB::table('regions')->insert([
            'name_ar'       => 'مدينة زايد',
            'name_en'       => 'Zayed Town',
            'display'       => '1',
            'created_at'    => date('Y-m-d H:i:s'),
            'updated_at'    => date('Y-m-d H:i:s'),
        ]);
        DB::table('regions')->insert([
            'name_ar'       => 'مدينة عيسي',
            'name_en'       => 'Isa Town',
            'display'       => '1',
            'created_at'    => date('Y-m-d H:i:s'),
            'updated_at'    => date('Y-m-d H:i:s'),
        ]);
        DB::table('regions')->insert([
            'name_ar'       => 'المحرق',
            'name_en'       => 'Al Muharraq',
            'display'       => '1',
            'created_at'    => date('Y-m-d H:i:s'),
            'updated_at'    => date('Y-m-d H:i:s'),
        ]);
        DB::table('regions')->insert([
            'name_ar'       => 'مقابة',
            'name_en'       => 'Maqabah',
            'display'       => '1',
            'created_at'    => date('Y-m-d H:i:s'),
            'updated_at'    => date('Y-m-d H:i:s'),
        ]);
        DB::table('regions')->insert([
            'name_ar'       => 'المقشع',
            'name_en'       => 'Al Maqsha',
            'display'       => '1',
            'created_at'    => date('Y-m-d H:i:s'),
            'updated_at'    => date('Y-m-d H:i:s'),
        ]);
        DB::table('regions')->insert([
            'name_ar'       => 'المنامة',
            'name_en'       => 'Manama',
            'display'       => '1',
            'created_at'    => date('Y-m-d H:i:s'),
            'updated_at'    => date('Y-m-d H:i:s'),
        ]);
        DB::table('regions')->insert([
            'name_ar'       => 'النبيه صالح',
            'name_en'       => 'Nabih Saleh',
            'display'       => '1',
            'created_at'    => date('Y-m-d H:i:s'),
            'updated_at'    => date('Y-m-d H:i:s'),
        ]);
        DB::table('regions')->insert([
            'name_ar'       => 'النعيم',
            'name_en'       => 'Alnaim',
            'display'       => '1',
            'created_at'    => date('Y-m-d H:i:s'),
            'updated_at'    => date('Y-m-d H:i:s'),
        ]);
        DB::table('regions')->insert([
            'name_ar'       => 'النويدرات',
            'name_en'       => 'Nuwaidrat',
            'display'       => '1',
            'created_at'    => date('Y-m-d H:i:s'),
            'updated_at'    => date('Y-m-d H:i:s'),
        ]);
        DB::table('regions')->insert([
            'name_ar'       => 'الهملة',
            'name_en'       => 'Al Hamala',
            'display'       => '1',
            'created_at'    => date('Y-m-d H:i:s'),
            'updated_at'    => date('Y-m-d H:i:s'),
        ]);
        DB::table('regions')->insert([
            'name_ar'       => 'البلاد القديم',
            'name_en'       => 'Bilad Al Qadeem',
            'display'       => '1',
            'created_at'    => date('Y-m-d H:i:s'),
            'updated_at'    => date('Y-m-d H:i:s'),
        ]);
        DB::table('regions')->insert([
            'name_ar'       => 'الكورة',
            'name_en'       => 'Kawarah',
            'display'       => '1',
            'created_at'    => date('Y-m-d H:i:s'),
            'updated_at'    => date('Y-m-d H:i:s'),
        ]);
    }
}
