<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::factory()->create([
            'role' => 'admin'
        ]);
        Role::factory()->create([
            'role' => 'user'
        ]);
        Role::factory()->create([
            'role' => 'maestro'
        ]);
    }
}
/* php artisan migrate --seed */