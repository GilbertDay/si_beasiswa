<x-app-layout>
    <div class="col-span-full xl:col-span-8 bg-white dark:bg-gray-800 shadow-xs rounded-xl m-4">
        <header class="px-5 py-4 border-b border-gray-100 dark:border-gray-700/60">
            <h2 class="font-semibold text-gray-800 dark:text-gray-100">Daftar Beasiswa</h2>
        </header>

        <!-- Filter Form -->
        <div class="px-5 py-4">
            <form method="GET" class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <input type="text" name="nim" placeholder="NIM" class="p-2 border rounded-lg dark:bg-gray-700 dark:text-white">
                <input type="text" name="nama" placeholder="Nama Mahasiswa" class="p-2 border rounded-lg dark:bg-gray-700 dark:text-white">
                <select name="program_studi" class="p-2 border rounded-lg dark:bg-gray-700 dark:text-white">
                    <option value="">-- Program Studi --</option>
                    <option>Manajemen</option>
                    <option>Teknologi Informasi</option>
                    <option>Informatika</option>
                    <option>Akuntansi</option>
                </select>
                <select name="jenis_beasiswa" class="p-2 border rounded-lg dark:bg-gray-700 dark:text-white">
                    <option value="">-- Jenis Beasiswa --</option>
                    <option>Beasiswa Adaro</option>
                    <option>Beasiswa Prestasi</option>
                    <option>Beasiswa KIP</option>
                </select>

                <!-- Semester + Tahun Akademik dijadikan satu kolom -->
                <div class="flex gap-2">
                    <input type="text" name="semester" placeholder="Semester" class="p-2 border rounded-lg w-1/2 dark:bg-gray-700 dark:text-white">
                    <input type="text" name="tahun_akademik" placeholder="Tahun" class="p-2 border rounded-lg w-1/2 dark:bg-gray-700 dark:text-white">
                </div>

                <!-- Status Seleksi dan Tombol Cari -->
                <div class="flex flex-col md:flex-row md:items-center gap-2">
                    <input type="text" name="status_seleksi" placeholder="Status Seleksi" class="p-2 border rounded-lg flex-1 dark:bg-gray-700 dark:text-white">
                    <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition">
                        Cari
                    </button>
                </div>
            </form>

        </div>

        <div class="p-3">
            <!-- Table -->
            <div class="overflow-x-auto">
                <table class="table-fixed w-full dark:text-gray-300">
                    <!-- Table header -->
                    <thead class="text-xs uppercase text-gray-800 dark:text-gray-500 bg-[#404CB8]/15 rounded-xs">
                        <tr>
                            <th class="p-2 w-1/4"><div class="font-bold text-left">Nim</div></th>
                            <th class="p-2 w-1/4"><div class="font-bold text-start">Nama Mahasiswa</div></th>
                            <th class="p-2 w-1/4"><div class="font-bold text-start">Program Studi</div></th>
                            <th class="p-2 w-1/4"><div class="font-bold text-left">Jenis Beasiswa</div></th>
                            <th class="p-2 w-1/4"><div class="font-bold text-start">Semester</div></th>
                            <th class="p-2 w-1/4"><div class="font-bold text-start">Tahun Akademik</div></th>
                            <th class="p-2 w-1/4"><div class="font-bold text-start">Status Seleksi</div></th>
                        </tr>
                    </thead>
                    <!-- Table body -->
                    <tbody class="text-sm font-medium divide-y divide-gray-100 dark:divide-gray-700/60">
                        <tr>
                            <td class="p-2 w-1/4">
                                <div class="text-start text-gray-500">72200133</div>
                            </td>
                            <td class="p-2 w-1/4">
                                <div class="text-start text-gray-500">Citra Lestari</div>
                            </td>
                            <td class="p-2 w-1/4">
                                <div class="text-start text-gray-500">Manajemen</div>
                            </td>
                            <td class="p-2 w-1/4">
                                <div class="text-start text-gray-500">Beasiswa Adaro</div>
                            </td>
                            <td class="p-2 w-1/4">
                                <div class="text-start text-gray-500">5</div>
                            </td>
                            <td class="p-2 w-1/4">
                                <div class="text-start text-gray-500">2025/2026</div>
                            </td>
                            <td class="p-2 w-1/4">
                                <span class="inline-block px-3 py-1 text-xs font-semibold text-red-800 bg-red-100 rounded-full">Tidak</span>
                            </td>
                        </tr>
                        <tr>
                            <td class="p-2 w-1/4">
                                <div class="text-start text-gray-500">72200343</div>
                            </td>
                            <td class="p-2 w-1/4">
                                <div class="text-start text-gray-500">Andi Wijaya</div>
                            </td>
                            <td class="p-2 w-1/4">
                                <div class="text-start text-gray-500">Teknologi Informasi</div>
                            </td>
                            <td class="p-2 w-1/4">
                                <div class="text-start text-gray-500">Beasiswa Prestasi</div>
                            </td>
                            <td class="p-2 w-1/4">
                                <div class="text-start text-gray-500">5</div>
                            </td>
                            <td class="p-2 w-1/4">
                                <div class="text-start text-gray-500">2025/2026</div>
                            </td>
                            <td class="p-2 w-1/4">
                                <span class="inline-block px-3 py-1 text-xs font-semibold text-green-800 bg-green-100 rounded-full">Diterima</span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
