<x-app-layout>
    <div class="col-span-full xl:col-span-8 bg-white dark:bg-gray-800 shadow-xs rounded-xl m-4">
        <header class="px-5 py-4 border-b border-gray-100 dark:border-gray-700/60">
            <h2 class="font-semibold text-gray-800 dark:text-gray-100">Daftar Beasiswa</h2>
        </header>
        <div class="p-3">
            <!-- Table -->
            <div class="overflow-x-auto">
                <table class="table-fixed w-full dark:text-gray-300">
                    <!-- Table header -->
                    <thead class="text-xs uppercase text-gray-800 dark:text-gray-500 bg-[#404CB8]/15 rounded-xs">
                        <tr>
                            <th class="p-2 w-1/4"><div class="font-bold text-left">Nama Mahasiswa</div></th>
                            <th class="p-2 w-1/4"><div class="font-bold text-start">KTP</div></th>
                            <th class="p-2 w-1/4"><div class="font-bold text-left">KTM</div></th>
                            <th class="p-2 w-1/4"><div class="font-bold text-start">Transkip Nilai</div></th>
                            <th class="p-2 w-1/4"><div class="font-bold text-start">Surat Rekomendasi</div></th>
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
                                <div class="text-start text-gray-500">PDF</div>
                            </td>
                            <td class="p-2 w-1/4">
                                <div class="text-start text-gray-500">PDF</div>
                            </td>
                            <td class="p-2 w-1/4">
                                <div class="text-start text-gray-500">PDF</div>
                            </td>
                            <td class="p-2 w-1/4">
                                <div class="text-start text-gray-500">PDF</div>
                            </td>
                            <td class="p-2 w-1/4">
                                <span class="inline-block px-3 py-1 text-xs font-semibold text-red-800 bg-red-100 rounded-full">Tidak</span>
                            </td>
                        </tr>
                        <!-- Row -->
                        <tr>
                            <td class="p-2 w-1/4">
                                <div class="text-start text-gray-500">Andi Wijaya</div>
                            </td>
                            <td class="p-2 w-1/4">
                                <div class="text-start text-gray-500">PNG</div>
                            </td>
                            <td class="p-2 w-1/4">
                                <div class="text-start text-gray-500">JPG</div>
                            </td>
                            <td class="p-2 w-1/4">
                                <div class="text-start text-gray-500">PDF</div>
                            </td>
                            <td class="p-2 w-1/4">
                                <div class="text-start text-gray-500">PDF</div>
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
