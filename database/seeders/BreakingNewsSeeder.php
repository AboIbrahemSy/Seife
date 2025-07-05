<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BreakingNewsSeeder extends Seeder
{
    public function run()
    {
        $news = [
            [
                'headline' => 'Massive earthquake strikes the city center.',
                'lang' => 'en',
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'headline' => 'زلزال قوي يضرب وسط المدينة.',
                'lang' => 'ar',
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'headline' => 'Presidential elections to be held next month.',
                'lang' => 'en',
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'headline' => 'إعلان انتخابات رئاسية الشهر القادم.',
                'lang' => 'ar',
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'headline' => 'Official holiday announced due to weather conditions.',
                'lang' => 'en',
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'headline' => 'إعلان إجازة رسمية بسبب الأحوال الجوية.',
                'lang' => 'ar',
                'active' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'headline' => 'International film festival launches today.',
                'lang' => 'en',
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'headline' => 'انطلاق فعاليات مهرجان السينما الدولي اليوم.',
                'lang' => 'ar',
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'headline' => 'Oil prices hit a new record high.',
                'lang' => 'en',
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'headline' => 'ارتفاع قياسي في أسعار النفط العالمية.',
                'lang' => 'ar',
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('breaking_news')->insert($news);
    }
}
