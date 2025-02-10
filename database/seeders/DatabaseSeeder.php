<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $user =User::factory()->create([
            'name' => 'Claude Myburgh',
            'email' => 'claude@dbdbrilliant.co.za',
            'phone' => '0817198302',
            'affiliate_code' => 'dbd712',
            'approved' => true
        ]);

        $this->call([
            TestimonialSeeder::class
        ]);


    }
}
