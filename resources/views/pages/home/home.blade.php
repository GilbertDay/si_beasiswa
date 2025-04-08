<x-app-layout>
    <div class="col-span-full xl:col-span-8 bg-white dark:bg-gray-800 shadow-xs rounded-xl m-4">
        <header class="px-5 py-4 border-b border-gray-100 dark:border-gray-700/60">
            <h2 class="font-semibold text-gray-800 dark:text-gray-100">Beasiswa Tersedia</h2>
        </header>
        <div class="p-3">

            <!-- Table -->
            <div class="overflow-x-auto">
                <table class="table-fixed w-full dark:text-gray-300">
                    <!-- Table header -->
                    <thead class="text-xs uppercase text-gray-800 dark:text-gray-500 bg-[#404CB8]/15 rounded-xs">
                        <tr>
                            <th class="px-2 py-1 w-[50px] text-xs text-left whitespace-nowrap">
                                <div class="font-bold text-left">No</div>
                            </th>
                            <th class="p-2 w-1/2">
                                <div class="font-bold text-left">Beasiswa</div>
                            </th>
                            <th class="p-2 w-1/4 ">
                                <div class="font-bold text-start">Aksi</div>
                            </th>
                        </tr>
                    </thead>
                    <!-- Table body -->
                    <tbody class="text-sm font-medium divide-y divide-gray-100 dark:divide-gray-700/60">
                        <!-- Row -->
                        <tr>
                            <td class="p-2 w-1/4">
                                <div class="flex items-start">
                                    <div class="text-gray-800 dark:text-gray-100">1</div>
                                </div>
                            </td>
                            <td class="p-2 w-1/4">
                                <div class="flex items-start">
                                    <div class="text-gray-800 dark:text-gray-100">Beasiswa Non Akademik</div>
                                </div>
                            </td>
                            <td class="p-2 w-1/4">
                                <button class="bg-[#5452D7] hover:bg-[#4442c0] text-white px-4 py-2 rounded transition">
                                    Check
                                </button>
                            </td>
                        </tr>
                        <!-- Row -->
                        <tr>
                            <td class="p-2 w-1/4">
                                <div class="flex items-start">
                                    <div class="text-gray-800 dark:text-gray-100">2</div>
                                </div>
                            </td>
                            <td class="p-2 w-1/4">
                                <div class="flex items-start">
                                    <div class="text-gray-800 dark:text-gray-100">Beasiswa KIP</div>
                                </div>
                            </td>
                            <td class="p-2 w-1/4">
                                <button class="bg-[#5452D7] hover:bg-[#4442c0] text-white px-4 py-2 rounded transition">
                                    Check
                                </button>
                            </td>
                        </tr>
                        <!-- Row -->
                        <tr>
                            <td class="p-2 w-1/4">
                                <div class="flex items-start">
                                    <div class="text-gray-800 dark:text-gray-100">3</div>
                                </div>
                            </td>
                            <td class="p-2 w-1/4">
                                <div class="flex items-start">
                                    <div class="text-gray-800 dark:text-gray-100">Beasiswa Pemerintah</div>
                                </div>
                            </td>
                            <td class="p-2 w-1/4">
                                <button class="bg-[#5452D7] hover:bg-[#4442c0] text-white px-4 py-2 rounded transition">
                                    Check
                                </button>
                            </td>
                        </tr>
                        <!-- Row -->
                        <tr>
                            <td class="p-2 w-1/4">
                                <div class="flex items-start">
                                    <div class="text-gray-800 dark:text-gray-100">4</div>
                                </div>
                            </td>
                            <td class="p-2 w-1/4">
                                <div class="flex items-start">
                                    <div class="text-gray-800 dark:text-gray-100">Beasiswa Kampus</div>
                                </div>
                            </td>
                            <td class="p-2 w-1/4">
                                <button class="bg-[#5452D7] hover:bg-[#4442c0] text-white px-4 py-2 rounded transition">
                                    Check
                                </button>
                            </td>
                        </tr>
                        <!-- Row -->
                        <tr>
                            <td class="p-2 w-1/4">
                                <div class="flex items-start">
                                    <div class="text-gray-800 dark:text-gray-100">5</div>
                                </div>
                            </td>
                            <td class="p-2 w-1/4">
                                <div class="flex items-start">
                                    <div class="text-gray-800 dark:text-gray-100">Beasiswa International</div>
                                </div>
                            </td>
                            <td class="p-2 w-1/4">
                                <button class="bg-[#5452D7] hover:bg-[#4442c0] text-white px-4 py-2 rounded transition">
                                    Check
                                </button>
                            </td>
                        </tr>
                         <!-- Row -->
                         <tr>
                            <td class="p-2 w-1/4">
                                <div class="flex items-start">
                                    <div class="text-gray-800 dark:text-gray-100">6</div>
                                </div>
                            </td>
                            <td class="p-2 w-1/4">
                                <div class="flex items-start">
                                    <div class="text-gray-800 dark:text-gray-100">Beasiswa Akademik</div>
                                </div>
                            </td>
                            <td class="p-2 w-1/4">
                                <button class="bg-[#5452D7] hover:bg-[#4442c0] text-white px-4 py-2 rounded transition">
                                    Check
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</x-app-layout>
