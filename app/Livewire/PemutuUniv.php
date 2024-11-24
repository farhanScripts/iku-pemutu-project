<?php

namespace App\Livewire;

use Livewire\Component;

class PemutuUniv extends Component
{
    public $stats = [
        [
            'label' => 'DOSEN',
            'value' => 139,
            'percentage' => 36,
            'note' => 'Kualifikasi S3',
            'color' => 'text-red-500',
        ],
        [
            'label' => 'MAHASISWA',
            'value' => 3208,
            'percentage' => 36,
            'note' => 'Dari tahun sebelumnya',
            'color' => 'text-green-500',
        ],
        [
            'label' => 'LULUSAN',
            'value' => 1678,
            'percentage' => 36,
            'note' => 'Dari tahun sebelumnya',
            'color' => 'text-red-500',
        ],
        [
            'label' => 'MAHASISWA BARU',
            'value' => 1256,
            'percentage' => 36,
            'note' => 'Dari tahun sebelumnya',
            'color' => 'text-green-500',
        ],
    ];
    public function render()
    {
        return view('livewire.pemutu-univ');
    }
}
