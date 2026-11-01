<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            AdminUserSeeder::class,
            SettingSeeder::class,
            CitySeeder::class,
            ServiceSeeder::class,
            BlogSeeder::class,
            FaqSeeder::class,
            TestimonialSeeder::class,
            TeamMemberSeeder::class,
            CaseStudySeeder::class,
        ]);
    }
}
