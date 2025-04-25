<x-app-layout>
    <div class="col-span-full xl:col-span-8 bg-white dark:bg-gray-800 shadow-xs rounded-xl m-4">
        <header class="px-5 py-4 border-b border-gray-100 dark:border-gray-700/60">
            <h2 class="font-semibold text-gray-800 dark:text-gray-100">Beasiswa Tersedia</h2>
        </header>
        <div class="p-3">

            <!-- Table -->
        <div class="p-3" x-data="{ openModalId: null }">
            <!-- Table -->
            <div class="overflow-x-auto">
                <table class="table-fixed w-full dark:text-gray-300">
                    <!-- Table header -->
                    <thead class="text-xs uppercase text-gray-800 dark:text-gray-500 bg-[#404CB8]/15 rounded-xs">
                        <tr>
                            <th class="p-2 w-1/4">
                                <div class="font-bold text-left">Beasiswa</div>
                            </th>
                            <th class="p-2 w-1/4">
                                <div class="font-bold text-start">Jenis</div>
                            </th>
                            <th class="p-2 w-1/4">
                                <div class="font-bold text-start">Aksi</div>
                            </th>
                        </tr>
                    </thead>
                    <!-- Table body -->
                    <tbody class="text-sm font-medium divide-y divide-gray-100 dark:divide-gray-700/60">
                        @foreach ($beasiswas as $beasiswa)
                        <tr>
                            <td class="p-2 w-1/4">
                                <div class="flex items-start">
                                    <div class="text-gray-800 dark:text-gray-100">{{ $beasiswa->nama_beasiswa }}</div>
                                </div>
                            </td>
                            <td class="p-2 w-1/4">
                                <div class="flex items-start">
                                    <div class="text-gray-800 dark:text-gray-100">{{ $beasiswa->jenis }}</div>
                                </div>
                            </td>
                            <td class="p-2 w-1/4">
                                <button
                                    @click="openModalId = {{ $beasiswa->id }}"
                                    class="bg-[#5452D7] hover:bg-[#4442c0] text-white px-4 py-2 rounded transition"
                                >
                                    Syarat
                                </button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <!-- Modal per beasiswa -->
            @foreach ($beasiswas as $beasiswa)
            <div
                x-show="openModalId === {{ $beasiswa->id }}"
                x-transition
                class="fixed inset-0 z-50 flex items-center justify-center"
                style="display: none; background-color: rgba(0, 0, 0, 0.5);"
            >
                <div @click.away="openModalId = null" class="bg-white dark:bg-gray-800 rounded-lg shadow-lg w-full max-w-md p-6">
                    <!-- Modal header -->
                    <div class="flex justify-between items-center border-b pb-2">
                        <h5 class="text-lg font-semibold text-gray-800 dark:text-white">Syarat & Ketentuan</h5>
                        <button @click="openModalId = null" class="text-gray-400 hover:text-gray-600 text-xl">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="mt-4 text-gray-700 dark:text-gray-300 space-y-1">
                    @foreach (explode(',', $beasiswa->syarat) as $syarat)
                        <li>{{ trim($syarat) }}</li>
                    @endforeach
                </div>

                <!-- Modal footer -->
                <div class="mt-6 flex justify-end">
                    <button @click="openModalId = null" class="px-4 py-2 bg-gray-200 hover:bg-gray-300 rounded">Tutup</button>
                </div>
            </div>
            @endforeach
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
