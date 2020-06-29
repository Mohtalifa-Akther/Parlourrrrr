<?php

use App\Setting;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::create(['name' => 'siteName', 'value' => 'Beauty Salon']);
        Setting::create(['name' => 'siteEmail', 'value' => 'info@example.com']);
        Setting::create(['name' => 'sitePhone', 'value' => '+0 111 222 333']);
        Setting::create(['name' => 'siteAddress', 'value' => '4th block,New York City.']);
        Setting::create(['name' => 'siteLogo', 'value' => 'logos/u5f1wdtlr6y3wv9C7sDBAXZht0dOhTj7GNsvCM2n.png']);
        Setting::create(['name' => 'currency', 'value' => '$']);
    }
}
