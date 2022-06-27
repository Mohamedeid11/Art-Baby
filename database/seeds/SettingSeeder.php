<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->insert([
            'key' => 'accept_order',
            'value' => '1',
            'type' => 'public',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('settings')->insert([
            'key' => 'discount',
            'value' => '10',
            'type' => 'public',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('settings')->insert([
            'key' => 'VAT',
            'value' => '15',
            'type' => 'public',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('settings')->insert([
            'key' => 'delivery_cost',
            'value' => '12',
            'type' => 'public',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('settings')->insert([
            'key' => 'min_order',
            'value' => '2',
            'type' => 'public',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('settings')->insert([
            'key' => 'about_ar',
            'value' => 'عن الموقع',
            'type' => 'about',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('settings')->insert([
            'key' => 'about_en',
            'value' => 'About Website',
            'type' => 'about',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('settings')->insert([
            'key' => 'return_ar',
            'value' => 'سياسة الاسترجاع',
            'type' => 'return',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('settings')->insert([
            'key' => 'return_en',
            'value' => 'return policy',
            'type' => 'return',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('settings')->insert([
            'key' => 'terms_ar',
            'value' => 'الشروط و الاحكام',
            'type' => 'terms',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('settings')->insert([
            'key' => 'terms_en',
            'value' => 'terms and condition',
            'type' => 'terms',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('settings')->insert([
            'key' => 'email',
            'value' => 'info@bacora-bh.com',
            'type' => 'contact',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('settings')->insert([
            'key' => 'phone',
            'value' => '01122334455',
            'type' => 'contact',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('settings')->insert([
            'key' => 'address_ar',
            'value' => 'المنامة, شارع الملك',
            'type' => 'contact',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('settings')->insert([
            'key' => 'address_en',
            'value' => 'AlManama, King st',
            'type' => 'contact',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('settings')->insert([
            'key' => 'facebook',
            'value' => 'http://www.facebook.com',
            'type' => 'contact',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('settings')->insert([
            'key' => 'twitter',
            'value' => 'http://twitter.com',
            'type' => 'contact',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('settings')->insert([
            'key' => 'instagram',
            'value' => 'http://instagram.com',
            'type' => 'contact',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('settings')->insert([
            'key' => 'snapchat',
            'value' => 'http://snapchat.com',
            'type' => 'contact',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('settings')->insert([
            'key' => 'lat',
            'value' => '26.22170100683176',
            'type' => 'contact',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('settings')->insert([
            'key' => 'long',
            'value' => '50.58556788820532',
            'type' => 'contact',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
