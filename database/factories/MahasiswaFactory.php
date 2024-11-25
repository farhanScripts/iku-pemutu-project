<?php

namespace Database\Factories;

use App\Models\Prodi;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Mahasiswa>
 */
class MahasiswaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'npm' => fake()->numerify('##########'),
            'nama' => fake()->name(),
            'jenis_kelamin' => fake()->randomElement(['Laki-laki', 'Perempuan']),
            'agama' => fake()->randomElement(['Islam', 'Kristen Protestan', 'Kristen Katholik', 'Buddha', 'Hindu', 'Konghucu']),
            'thn_mulai' => fake()->dateTimeBetween('-6 years', '-4 years'),
            'jenjang_pendidikan' => fake()->randomElement(['S1', 'S2', 'S3']),
            'universitas' => 'Pancasila',
            'prodi_id' => Prodi::factory(),
            'thn_lulus' => fake()->dateTimeBetween('-1 year'),
            'kelas_reg_rk' => fake()->randomElement(['Reguler', 'Non-Reguler']),
            'status_mhs' => fake()->randomElement(['Aktif', 'Cuti', 'DO', 'Lulus']),
        ];
    }
}
