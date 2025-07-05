<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class LanguagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $languages = [
            ['name' => 'العربية', 'code' => 'ar'],
            ['name' => 'English', 'code' => 'en'],
            ['name' => 'French', 'code' => 'fr'],
            ['name' => 'German', 'code' => 'de'],
            ['name' => 'Spanish', 'code' => 'es'],
            ['name' => 'Russian', 'code' => 'ru'],
            ['name' => 'Chinese', 'code' => 'zh'],
            ['name' => 'Japanese', 'code' => 'ja'],
            ['name' => 'Hindi', 'code' => 'hi'],
            ['name' => 'Portuguese', 'code' => 'pt'],
            ['name' => 'Italian', 'code' => 'it'],
            ['name' => 'Turkish', 'code' => 'tr'],
            ['name' => 'Persian', 'code' => 'fa'],
            ['name' => 'Urdu', 'code' => 'ur'],
            ['name' => 'Korean', 'code' => 'ko'],
            ['name' => 'Bengali', 'code' => 'bn'],
            ['name' => 'Dutch', 'code' => 'nl'],
            ['name' => 'Polish', 'code' => 'pl'],
            ['name' => 'Swedish', 'code' => 'sv'],
            ['name' => 'Greek', 'code' => 'el'],
            ['name' => 'Czech', 'code' => 'cs'],
            ['name' => 'Romanian', 'code' => 'ro'],
            ['name' => 'Hungarian', 'code' => 'hu'],
            ['name' => 'Ukrainian', 'code' => 'uk'],
            ['name' => 'Thai', 'code' => 'th'],
            ['name' => 'Vietnamese', 'code' => 'vi'],
            ['name' => 'Indonesian', 'code' => 'id'],
            ['name' => 'Malay', 'code' => 'ms'],
            ['name' => 'Hebrew', 'code' => 'he'],
            ['name' => 'Norwegian', 'code' => 'no'],
            ['name' => 'Finnish', 'code' => 'fi'],
            ['name' => 'Danish', 'code' => 'da'],
            ['name' => 'Serbian', 'code' => 'sr'],
            ['name' => 'Slovak', 'code' => 'sk'],
            ['name' => 'Croatian', 'code' => 'hr'],
            ['name' => 'Bulgarian', 'code' => 'bg'],
            ['name' => 'Slovenian', 'code' => 'sl'],
            ['name' => 'Lithuanian', 'code' => 'lt'],
            ['name' => 'Latvian', 'code' => 'lv'],
            ['name' => 'Estonian', 'code' => 'et'],
            ['name' => 'Filipino', 'code' => 'fil'],
            ['name' => 'Malayalam', 'code' => 'ml'],
            ['name' => 'Tamil', 'code' => 'ta'],
            ['name' => 'Telugu', 'code' => 'te'],
            ['name' => 'Marathi', 'code' => 'mr'],
            ['name' => 'Gujarati', 'code' => 'gu'],
            ['name' => 'Punjabi', 'code' => 'pa'],
            ['name' => 'Kannada', 'code' => 'kn'],
            ['name' => 'Swahili', 'code' => 'sw'],
            ['name' => 'Amharic', 'code' => 'am'],
            ['name' => 'Afrikaans', 'code' => 'af'],
            ['name' => 'Yoruba', 'code' => 'yo'],
            ['name' => 'Igbo', 'code' => 'ig'],
            ['name' => 'Zulu', 'code' => 'zu'],
            ['name' => 'Hausa', 'code' => 'ha'],
            ['name' => 'Mongolian', 'code' => 'mn'],
            ['name' => 'Nepali', 'code' => 'ne'],
            ['name' => 'Pashto', 'code' => 'ps'],
            ['name' => 'Azerbaijani', 'code' => 'az'],
            ['name' => 'Georgian', 'code' => 'ka'],
            ['name' => 'Armenian', 'code' => 'hy'],
            ['name' => 'Macedonian', 'code' => 'mk'],
            ['name' => 'Albanian', 'code' => 'sq'],
            ['name' => 'Bosnian', 'code' => 'bs'],
            ['name' => 'Kazakh', 'code' => 'kk'],
            ['name' => 'Uzbek', 'code' => 'uz'],
            ['name' => 'Kurdish', 'code' => 'ku'],
            ['name' => 'Tatar', 'code' => 'tt'],
            ['name' => 'Tajik', 'code' => 'tg'],
            ['name' => 'Somali', 'code' => 'so'],
            ['name' => 'Sinhala', 'code' => 'si'],
            ['name' => 'Lao', 'code' => 'lo'],
            ['name' => 'Khmer', 'code' => 'km'],
            ['name' => 'Burmese', 'code' => 'my'],
            ['name' => 'Maori', 'code' => 'mi'],
            ['name' => 'Samoan', 'code' => 'sm'],
            ['name' => 'Tongan', 'code' => 'to'],
            ['name' => 'Fijian', 'code' => 'fj'],
            ['name' => 'Haitian Creole', 'code' => 'ht'],
            ['name' => 'Javanese', 'code' => 'jv'],
            ['name' => 'Sundanese', 'code' => 'su'],
            ['name' => 'Madurese', 'code' => 'mad'],
            ['name' => 'Minangkabau', 'code' => 'min'],
            ['name' => 'Acehnese', 'code' => 'ace'],
            ['name' => 'Batak', 'code' => 'btk'],
        ];

        DB::table('languages')->insert($languages);
    }
}
