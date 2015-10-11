<?php

use Illuminate\Database\Seeder;
use Vinfo\Language;
use Punic\Language as PunicLanguage;

class LanguagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		DB::table('languages')->delete();

        $languages = Config::get('translatable.locales');

		foreach ($languages as $language) {
            $language = [
                'code' => $language,
                'name' => PunicLanguage::getName($language, $language),
            ];
            language::create($language);
        }
    }
}
