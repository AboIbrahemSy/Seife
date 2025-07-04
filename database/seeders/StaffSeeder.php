<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StaffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('staff')->insert([
            [
                'name' => json_encode([
                    'en' => 'Omar Hallak',
                    'ar' => 'عمر حلاق',
                ]),
                'job_title' => json_encode([
                    'en' => null,
                    'ar' => null,
                ]),
                'email' => 'omar.hallak@seife.gov.sy',
                'phone' => '+963 944 340 407',
                'image' => 'images/staff/1.jpeg',
            ],
            [
                'name' => json_encode([
                    'en' => 'Mohamad Eid Saqqa',
                    'ar' => 'محمد عيد سقا',
                ]),
                'job_title' => json_encode([
                    'en' => null,
                    'ar' => null,
                ]),
                'email' => 'mohammad.alsaqqa@seife.gov.sy',
                'phone' => '+963 932 540 227',
                'image' => 'images/staff/2.jpeg',
            ],
            [
                'name' => json_encode([
                    'en' => 'Haytham Qwaider',
                    'ar' => 'هيثم قويدر',
                ]),
                'job_title' => json_encode([
                    'en' => null,
                    'ar' => null,
                ]),
                'email' => 'haytham.qwaider@seife.gov.sy',
                'phone' => '+963 933 273 608',
                'image' => 'images/staff/3.jpeg',
            ],
            [
                'name' => json_encode([
                    'en' => 'Abdullah Alzeidan',
                    'ar' => 'عبد الله الزيدان',
                ]),
                'job_title' => json_encode([
                    'en' => null,
                    'ar' => null,
                ]),
                'email' => 'abdullah.alzeidan@seife.gov.sy',
                'phone' => '+352 681 120 181',
                'image' => 'images/staff/4.jpeg',
            ],
            [
                'name' => json_encode([
                    'en' => 'Okba Abdulrahim',
                    'ar' => 'عقبة عبد الرحيم',
                ]),
                'job_title' => json_encode([
                    'en' => null,
                    'ar' => null,
                ]),
                'email' => 'okba.Abdulrahim@seife.gov.sy',
                'phone' => '+352 681 128 346',
                'image' => 'images/staff/5.jpeg',
            ],
            [
                'name' => json_encode([
                    'en' => 'Hamoud Zooaa',
                    'ar' => 'حمود زوعة',
                ]),
                'job_title' => json_encode([
                    'en' => null,
                    'ar' => null,
                ]),
                'email' => 'hamoud.zooaa@seife.gov.sy',
                'phone' => '+963 997 889 830',
                'image' => 'images/staff/6.jpeg',
            ],
        ]);
    }
}
