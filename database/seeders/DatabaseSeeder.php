<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([DashboardTableSeeder::class, KapalModelSeeder::class, PenjadwalanKapalSeeder::class, DetailModelSeeder::class]);

        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin'),
        ]);
    }
}
