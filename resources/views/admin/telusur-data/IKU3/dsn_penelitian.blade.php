<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Halaman IKU 3') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <!-- Dropdown Tahun -->
                    <div class="mb-4">
                        <label for="tahun" class="block text-sm font-medium text-gray-700">Tahun *</label>
                        <select id="tahun" name="tahun" class="mt-1 block w-40 rounded-md border-gray-300 shadow-sm focus:ring-teal-500 focus:border-teal-500">
                            <option>2023</option>
                            <option>2022</option>
                        </select>
                    </div>

                    <!-- Tabs -->
                    <div class="flex space-x-4 mb-4">
                        <a href="#" class="px-4 py-2 bg-teal-500 text-white rounded-lg shadow hover:bg-teal-600">Penelitian Dosen di Luar Kampus</a>
                        <a href="#" class="px-4 py-2 bg-gray-200 text-gray-800 rounded-lg shadow hover:bg-gray-300">Dosen Mengajar di Kampus Lain</a>
                        <a href="#" class="px-4 py-2 bg-gray-200 text-gray-800 rounded-lg shadow hover:bg-gray-300">Dosen Mengajar di Luar Negeri</a>
                        <a href="#" class="px-4 py-2 bg-gray-200 text-gray-800 rounded-lg shadow hover:bg-gray-300">Dosen Menjadi Praktisi</a>
                        <a href="#" class="px-4 py-2 bg-gray-200 text-gray-800 rounded-lg shadow hover:bg-gray-300">Dosen Membimbing Mahasiswa MBKM</a>
                        <!-- Tambahkan tab lainnya jika diperlukan -->
                    </div>

                    <!-- Tabel -->
                    <div class="overflow-x-auto">
                        <table class="min-w-full text-center border-collapse border border-gray-200">
                            <thead class="bg-teal-500 text-white">
                                <tr>
                                    <th class="px-4 py-2 border">No</th>
                                    <th class="px-4 py-2 border">TA</th>
                                    <th class="px-4 py-2 border">NIDN</th>
                                    <th class="px-4 py-2 border">Nama Dosen</th>
                                    <th class="px-4 py-2 border">Nama PT</th>
                                    <th class="px-4 py-2 border">Tahun Kegiatan</th>
                                    <th class="px-4 py-2 border">Lembaga IPTEK</th>
                                    <th class="px-4 py-2 border">Jenis</th>
                                    <th class="px-4 py-2 border">Judul</th>
                                    <th class="px-4 py-2 border">Bobot</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="bg-white">
                                    <td class="px-4 py-2 border">1</td>
                                    <td class="px-4 py-2 border">2023</td>
                                    <td class="px-4 py-2 border">0322027002</td>
                                    <td class="px-4 py-2 border">ADHI MAHENDRA</td>
                                    <td class="px-4 py-2 border">Universitas Pancasila</td>
                                    <td class="px-4 py-2 border">2023</td>
                                    <td class="px-4 py-2 border">Universitas Dian Nusantara</td>
                                    <td class="px-4 py-2 border">Penelitian</td>
                                    <td class="px-4 py-2 border">Desain Antena Mikrostrip Miniatur sebagai Pendukung Konektivitas LoraWAN</td>
                                    <td class="px-4 py-2 border">1</td>
                                </tr>
                                <tr class="bg-gray-50">
                                    <td class="px-4 py-2 border">2</td>
                                    <td class="px-4 py-2 border">2023</td>
                                    <td class="px-4 py-2 border">0322027002</td>
                                    <td class="px-4 py-2 border">ADHI MAHENDRA</td>
                                    <td class="px-4 py-2 border">Universitas Pancasila</td>
                                    <td class="px-4 py-2 border">2023</td>
                                    <td class="px-4 py-2 border">Universitas Dian Nusantara</td>
                                    <td class="px-4 py-2 border">Penelitian</td>
                                    <td class="px-4 py-2 border">Desain Antena Mikrostrip Miniatur sebagai Pendukung Konektivitas LoraWAN</td>
                                    <td class="px-4 py-2 border">1</td>
                                </tr>
                                <tr class="bg-white">
                                    <td class="px-4 py-2 border">3</td>
                                    <td class="px-4 py-2 border">2023</td>
                                    <td class="px-4 py-2 border">0313109102</td>
                                    <td class="px-4 py-2 border">VITHA OCTAVANNY</td>
                                    <td class="px-4 py-2 border">Universitas Pancasila</td>
                                    <td class="px-4 py-2 border">2022</td>
                                    <td class="px-4 py-2 border">Institut Komunikasi Dan Bisnis LSPR</td>
                                    <td class="px-4 py-2 border">Pengmas</td>
                                    <td class="px-4 py-2 border">Penyelenggara Acara: Pelatihan dan Sosialisasi Desa Wisata...</td>
                                    <td class="px-4 py-2 border">1</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
