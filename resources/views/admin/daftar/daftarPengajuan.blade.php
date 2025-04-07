<x-app-layout>
    <div class="col-span-full xl:col-span-8 bg-white dark:bg-gray-800 shadow-xs rounded-xl mx-4">
        <header class="px-5 py-4 border-b border-gray-100 dark:border-gray-700/60">
            <h2 class="font-semibold text-gray-800 dark:text-gray-100">Daftar Beasiswa</h2>
        </header>
        <div class="p-3">
            <!-- Table -->
            <div class="overflow-x-auto">
                <table class="table-fixed w-full dark:text-gray-300">
                    <!-- Table header -->
                    <thead class="text-xs uppercase text-gray-800 dark:text-gray-500 bg-gray-50 dark:bg-gray-700/50 rounded-xs">
                        <tr>
                            <th class="p-2 w-1/4"><div class="font-bold text-left">Nama Mahasiswa</div></th>
                            <th class="p-2 w-1/4"><div class="font-bold text-start">Beasiswa</div></th>
                            <th class="p-2 w-1/4"><div class="font-bold text-left">Tanggal Pengajuan</div></th>
                            <th class="p-2 w-1/4"><div class="font-bold text-start">Dokumen</div></th>
                            <th class="p-2 w-1/4"><div class="font-bold text-start">Status</div></th>
                        </tr>
                    </thead>
                    <!-- Table body -->
                    <tbody class="text-sm font-medium divide-y divide-gray-100 dark:divide-gray-700/60">
                        <!-- Row -->
                        <tr>
                            <td class="p-2 w-1/4">
                                <div class="text-start text-gray-500">Citra Lestari</div>
                            </td>
                            <td class="p-2 w-1/4">
                                <div class="text-start text-gray-500">Beasiswa Prestasi</div>
                            </td>
                            <td class="p-2 w-1/4">
                                <div class="text-start text-gray-500">2025-04-01</div>
                            </td>
                            <td class="p-2 w-1/4">
                                <div class="text-start text-gray-500">dokumen.pdf</div>
                            </td>
                            <td class="p-2 w-1/4">
                                <span class="inline-block px-3 py-1 text-xs font-semibold text-yellow-800 bg-yellow-100 rounded-full">Diproses</span>
                            </td>
                        </tr>
                        <!-- Row -->
                        <tr>
                            <td class="p-2 w-1/4">
                                <div class="text-start text-gray-500">Andi Wijaya</div>
                            </td>
                            <td class="p-2 w-1/4">
                                <div class="text-start text-gray-500">Beasiswa Unggulan</div>
                            </td>
                            <td class="p-2 w-1/4">
                                <div class="text-start text-gray-500">2025-04-02</div>
                            </td>
                            <td class="p-2 w-1/4">
                                <div class="text-start text-gray-500">lampiran.zip</div>
                            </td>
                            <td class="p-2 w-1/4">
                                <span class="inline-block px-3 py-1 text-xs font-semibold text-green-800 bg-green-100 rounded-full">Diterima</span>
                            </td>
                        </tr>
                        <!-- Row -->
                        <tr>
                            <td class="p-2 w-1/4">
                                <div class="text-start text-gray-500">Andi Wijaya</div>
                            </td>
                            <td class="p-2 w-1/4">
                                <div class="text-start text-gray-500">Beasiswa Unggulan</div>
                            </td>
                            <td class="p-2 w-1/4">
                                <div class="text-start text-gray-500">2025-04-02</div>
                            </td>
                            <td class="p-2 w-1/4">
                                <div class="text-start text-gray-500">lampiran.zip</div>
                            </td>
                            <td class="p-2 w-1/4">
                                <span class="inline-block px-3 py-1 text-xs font-semibold text-red-800 bg-red-100 rounded-full">Ditolak</span>

                            </td>
                        </tr>
                    </tbody>
                </table>
                 <!-- Buttons -->
                 <div class="flex justify-end gap-2 mt-4">
                    <button class="px-4 py-2 bg-red-600 text-white text-sm font-medium rounded-lg hover:bg-red-700 transition">
                        Delete
                    </button>
                    <button class="px-4 py-2 bg-blue-600 text-white text-sm font-medium rounded-lg hover:bg-blue-700 transition">
                        Update
                    </button>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
