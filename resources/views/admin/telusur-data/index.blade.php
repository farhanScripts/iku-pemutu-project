<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Capaian IKU Universitas') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <!-- Filter Section -->
                    <div class="mb-6">
                        <label for="tahun" class="block text-sm font-medium text-gray-700">Tahun *</label>
                        <select id="tahun" name="tahun" class="mt-1 block w-40 rounded-md border-gray-300 shadow-sm focus:border-teal-500 focus:ring-teal-500">
                            <option value="2023">2023</option>
                            <option value="2023">2022</option>
                        </select>
                    </div>
                    <!-- Info Section -->
                    <div class="mb-6 bg-gray-100 p-4 rounded-lg">
                        <p class="text-sm text-gray-700"><strong>Nama PT:</strong> Universitas Pancasila</p>
                        <p class="text-sm text-gray-700"><strong>Tahun:</strong> 2023</p>
                        <p class="text-sm text-gray-500"><strong>Update Terakhir:</strong> 2 bulan yang lalu pada Kamis, 18 Juli 2024 17:10</p>
                    </div>

                    <!-- Table Section -->
                    <div class="overflow-x-auto">
                        <table class="min-w-full text-left border-collapse border border-gray-200">
                            <thead class="bg-teal-500 text-white">
                                <tr>
                                    <th class="px-4 py-2 border text-center">Keterangan</th>
                                    <th class="px-4 py-2 border">IKU 1</th>
                                    <th class="px-4 py-2 border">IKU 2</th>
                                    <th class="px-4 py-2 border"><a href="{{ route('admin.telusur-data.iku3') }}">IKU 3</a></th>
                                    <th class="px-4 py-2 border">IKU 4</th>
                                    <th class="px-4 py-2 border">IKU 5</th>
                                    <th class="px-4 py-2 border">IKU 6</th>
                                    <th class="px-4 py-2 border">IKU 7</th>
                                    <th class="px-4 py-2 border">IKU 8</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="px-4 py-2 border">Capaian</td>
                                    <td class="px-4 py-2 border">55.08 </td>
                                    <td class="px-4 py-2 border">5.41 </td>
                                    <td class="px-4 py-2 border">46.46 </td>
                                    <td class="px-4 py-2 border">5.3 </td>
                                    <td class="px-4 py-2 border">1.63 </td>
                                    <td class="px-4 py-2 border">0 </td>
                                    <td class="px-4 py-2 border">10.62 </td>
                                    <td class="px-4 py-2 border">0 </td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-2 border">Capaian Tahun Sebelumnya</td>
                                    <td class="px-4 py-2 border">14.05</td>
                                    <td class="px-4 py-2 border">5.26</td>
                                    <td class="px-4 py-2 border">32.49</td>
                                    <td class="px-4 py-2 border">53.15</td>
                                    <td class="px-4 py-2 border">2.44</td>
                                    <td class="px-4 py-2 border">0</td>
                                    <td class="px-4 py-2 border">1.71</td>
                                    <td class="px-4 py-2 border">5.56</td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-2 border">Pertumbuhan</td>
                                    <td class="px-4 py-2 border">41.03</td>
                                    <td class="px-4 py-2 border">0.15</td>
                                    <td class="px-4 py-2 border">13.96</td>
                                    <td class="px-4 py-2 border">-47.85</td>
                                    <td class="px-4 py-2 border">-0.81</td>
                                    <td class="px-4 py-2 border">0.07</td>
                                    <td class="px-4 py-2 border">8.91</td>
                                    <td class="px-4 py-2 border">-5.56</td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-2 border">Skor Pertumbuhan</td>
                                    <td class="px-4 py-2 border">41.03</td>
                                    <td class="px-4 py-2 border">0.15</td>
                                    <td class="px-4 py-2 border">13.96</td>
                                    <td class="px-4 py-2 border">-47.85</td>
                                    <td class="px-4 py-2 border">-0.81</td>
                                    <td class="px-4 py-2 border">0.07</td>
                                    <td class="px-4 py-2 border">8.91</td>
                                    <td class="px-4 py-2 border">-5.56</td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-2 border">Capaian Tertinggi LLDIKTI</td>
                                    <td class="px-4 py-2 border">41.03</td>
                                    <td class="px-4 py-2 border">0.15</td>
                                    <td class="px-4 py-2 border">13.96</td>
                                    <td class="px-4 py-2 border">-47.85</td>
                                    <td class="px-4 py-2 border">-0.81</td>
                                    <td class="px-4 py-2 border">0.07</td>
                                    <td class="px-4 py-2 border">8.91</td>
                                    <td class="px-4 py-2 border">-5.56</td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-2 border">Capaian Tertinggi Nasional</td>
                                    <td class="px-4 py-2 border">41.03</td>
                                    <td class="px-4 py-2 border">0.15</td>
                                    <td class="px-4 py-2 border">13.96</td>
                                    <td class="px-4 py-2 border">-47.85</td>
                                    <td class="px-4 py-2 border">-0.81</td>
                                    <td class="px-4 py-2 border">0.07</td>
                                    <td class="px-4 py-2 border">8.91</td>
                                    <td class="px-4 py-2 border">-5.56</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
