<x-app-layout>
    <div class="col-span-full xl:col-span-8 bg-white dark:bg-gray-800 shadow-xs rounded-xl m-4">
        <header class="px-5 py-4 border-b border-gray-100 dark:border-gray-700/60">
            <h2 class="font-semibold text-gray-800 dark:text-gray-100">Data Administrasi Beasiswa</h2>
        </header>
        <div class="p-3">

            <!-- Table -->
            <div class="overflow-x-auto">
                <table class="table-fixed w-full dark:text-gray-300">
                    <!-- Table header -->
                    <thead class="text-xs uppercase text-gray-800 dark:text-gray-500 bg-[#404CB8]/15 rounded-xs">
                        <tr>
                            <th class="p-2 w-1/4"><div class="font-bold text-left">Nama Mahasiswa</div></th>
                            <th class="p-2 w-1/4"><div class="font-bold text-start">Beasiswa</div></th>
                    </thead>

                    <!-- Table body -->
                    <tbody class="text-sm font-medium divide-y divide-gray-100 dark:divide-gray-700/60">
                        <!-- Row -->
                        <tr>
                            <td class="p-2 w-1/4">
                                <div class="flex items-start">
                                    <div class="text-gray-800 dark:text-gray-100">Total Mahasiswa Terdaftar</div>
                                </div>
                            </td>
                            <td class="p-2 w-1/4">
                                <div class="text-start text-gray-500">{{ $mahasiswas }}</div>
                            </td>
                        </tr>
                        <!-- Row -->
                        <tr>
                            <td class="p-2 w-1/4">
                                <div class="flex items-start">
                                    <div class="text-gray-800 dark:text-gray-100">Jumlah Beasiswa Tersedia</div>
                                </div>
                            </td>
                            <td class="p-2 w-1/4">
                                <div class="text-start text-gray-500">{{ $beasiswas }}</div>
                            </td>
                        </tr>
                        <!-- Row -->
                        <tr>
                            <td class="p-2 w-1/4">
                                <div class="flex items-start">
                                    <div class="text-gray-800 dark:text-gray-100">Total Pengajuan Beasiswa</div>
                                </div>
                            </td>
                            <td class="p-2 w-1/4">
                                <div class="text-start text-gray-500">{{ $pengajuan }}</div>
                            </td>
                        </tr>
                        <!-- Row -->
                        <tr>
                            <td class="p-2 w-1/4">
                                <div class="flex items-start">
                                    <div class="text-gray-800 dark:text-gray-100">Pengajuan Diterima</div>
                                </div>
                            </td>
                            <td class="p-2 w-1/4">
                                <div class="text-start text-gray-500">{{ $pengajuanDiterima }}</div>
                            </td>
                        </tr>
                        <!-- Row -->
                        <tr>
                            <td class="p-2 w-1/4">
                                <div class="flex items-start">
                                    <div class="text-gray-800 dark:text-gray-100">Pengajuan Ditolak</div>
                                </div>
                            </td>
                            <td class="p-2 w-1/4">
                                <div class="text-start text-gray-500">{{ $pengajuanDitolak }}</div>
                            </td>
                        </tr>
                         <!-- Row -->
                         <tr>
                            <td class="p-2 w-1/4">
                                <div class="flex items-start">
                                    <div class="text-gray-800 dark:text-gray-100">Pengajuan Di Proses</div>
                                </div>
                            </td>
                            <td class="p-2 w-1/4">
                                <div class="text-start text-gray-500">{{ $pengajuanDiProses }}</div>
                            </td>
                        </tr>
                         <!-- Row opsi -->
                         {{-- <tr>
                            <td class="p-2 w-1/4">
                                <div class="flex items-start">
                                    <div class="text-gray-800 dark:text-gray-100">Opsi</div>
                                </div>
                            </td>
                            <td class="p-2 w-1/4">
                                <div class="text-start text-gray-500">Lihat</div>
                            </td>
                        </tr> --}}
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</x-app-layout>
