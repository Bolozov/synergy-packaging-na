<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class settings_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::create([
            'contact_mail' => 'contact@agencit.fr',
            'phone_number' => '+33 (0)6 20 95 18 84',
            'fax_number' => '+33 (0)1 86 61 37 89',
            'adress' => '112 Allées des Erables 93420 Villepinte - France',
            'facbook_link' => '#',
            'youtube_link' => '#',
            'twitter_link' => '#',
            'instagram_link' => '#',
            'linkedin_link' => '#',
        ]);
    }
}
