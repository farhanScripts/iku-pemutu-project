<?php

namespace Database\Seeders;

use App\Models\Fakultas;
use App\Models\Mahasiswa;
use App\Models\Prodi;
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
        $prodi = Prodi::factory(10)->recycle([
            Fakultas::factory(7)->create()
        ])->create();

        Mahasiswa::factory(10)->recycle([
            $prodi
        ])->create();

        $this->call(RolePermissionSeeder::class);
    }
}
