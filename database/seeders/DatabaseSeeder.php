<?php

namespace Database\Seeders;

use App\Models\Anggota;
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
        User::factory()->create([
            'nama' => 'Administrator',
            'username' => 'admin',
            'role' => 'admin',
        ]);

        Anggota::factory(15)->create();

        $this->call([
            KategoriSeeder::class,
            PenerbitSeeder::class
        ]);
    }
}
