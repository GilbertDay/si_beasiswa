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
                            <th class="p-2 w-1/2">
                                <div class="font-bold text-left">Jenis Beasiswa</div>
                            </th>
                            <th class="p-2 w-1/4 ">
                                <div class="font-bold text-start">Aksi</div>
                            </th>
                        </tr>
                    </thead>
                    <!-- Table body -->
                    <tbody class="text-sm font-medium divide-y divide-gray-100 dark:divide-gray-700/60">
                        <!-- Row -->
                        @foreach ($beasiswas as $beasiswa)
                        <tr>
                            <td class="p-2 w-1/4">
                                <div class="flex items-start">
                                    <div class="text-gray-800 dark:text-gray-100">{{ $loop->iteration }}</div>
                                </div>
                            </td>
                            <td class="p-2 w-1/4">
                                <div class="flex items-start">
                                    <div class="text-gray-800 dark:text-gray-100">{{ $beasiswa->nama_beasiswa }}</div>
                                </div>
                            </td>
                            <td class="p-2 w-1/4">
                                <div class="flex items-start">
                                    <div class="text-gray-800 dark:text-gray-100">{{ $beasiswa->jenis_beasiswa }}</div>
                                </div>
                            </td>
                            <td class="p-2 w-1/4">
                                <button
                                onclick="openModal()"
                                class="bg-[#5452D7] hover:bg-[#4442c0] text-white px-4 py-2 rounded transition">
                                    Check
                                </button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
    <!-- Modal -->
    <div
        id="modal"
        class="fixed inset-0 bg-black/50 flex items-center justify-center z-50 hidden"
    >
        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6 w-11/12 md:w-1/2">
            <h2 class="text-2xl font-bold mb-4 text-center text-gray-800 dark:text-gray-100">Syarat & Ketentuan</h2>
            <div class="text-gray-700 dark:text-gray-300 space-y-2">
                <p>1. Mahasiswa aktif di universitas.</p>
                <p>2. IPK minimal 3.00 setiap semester.</p>
                <p>3. Tidak sedang menerima beasiswa lain.</p>
                <p>4. Melengkapi dokumen administrasi yang diperlukan.</p>
            </div>
            <div class="flex justify-center mt-6">
                <button
                    onclick="closeModal()"
                    class="bg-[#5452D7] hover:bg-[#4442c0] text-white px-6 py-2 rounded transition"
                >
                    Tutup
                </button>
            </div>
        </div>
    </div>

    <!-- Script -->
    <script>
        function openModal() {
            document.getElementById('modal').classList.remove('hidden');
        }

        function closeModal() {
            document.getElementById('modal').classList.add('hidden');
        }
    </script>
</x-app-layout>
