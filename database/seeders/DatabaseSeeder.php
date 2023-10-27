<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@cityfilms.com.pk',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'role' => 'admin'
        ]);
        \App\Models\PortfolioCategory::factory()->create([
            'name' => 'COMMERCIAL',
        ]);
        \App\Models\PortfolioCategory::factory()->create([
            'name' => 'DOCUMENTARY',
        ]);\App\Models\PortfolioCategory::factory()->create([
            'name' => 'CORPORATE',
        ]);
    }
}
