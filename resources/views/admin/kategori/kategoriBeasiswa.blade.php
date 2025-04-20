<x-app-layout>
    <div class="col-span-full xl:col-span-8 bg-white dark:bg-gray-800 shadow-xs rounded-xl m-4 relative">
        <header class="px-5 py-4 border-b border-gray-100 dark:border-gray-700/60 flex justify-between items-center">
            <h2 class="font-semibold text-gray-800 dark:text-gray-100">Kategori Beasiswa</h2>
            <button
                onclick="openFormModal()"
                class="bg-[#5452D7] hover:bg-[#4442c0] text-white px-4 py-2 rounded transition text-sm"
            >
                Tambah Beasiswa
            </button>
        </header>

        <div class="p-3">
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
                                <div class="font-bold text-start">Aksi</div>
                            </th>
                        </tr>
                    </thead>
                    <!-- Table body -->
                    <tbody class="text-sm font-medium divide-y divide-gray-100 dark:divide-gray-700/60">
                        @foreach (['Nama Mahasiswa', 'Nim', 'Nama Beasiswa', 'Periode', 'Status Penerimaan', 'Tanggal Pengumuman', 'Keterangan'] as $item)
                        <tr>
                            <td class="p-2 w-1/4">
                                <div class="flex items-start">
                                    <div class="text-gray-800 dark:text-gray-100">{{ $item }}</div>
                                </div>
                            </td>
                            <td class="p-2 w-1/4">
                                <button
                                    onclick="openModal()"
                                    class="bg-[#5452D7] hover:bg-[#4442c0] text-white px-4 py-2 rounded transition"
                                >
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

    <!-- Modal: Syarat & Ketentuan -->
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

    <!-- Modal: Form Tambah Beasiswa -->
    <div
        id="formModal"
        class="fixed inset-0 bg-black/50 flex items-center justify-center z-50 hidden"
    >
        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6 w-11/12 md:w-1/2">
            <h2 class="text-2xl font-bold mb-4 text-center text-gray-800 dark:text-gray-100">Tambah Beasiswa</h2>
            <form class="space-y-4">
                <div>
                    <label class="block text-gray-700 dark:text-gray-300 mb-1" for="nama_beasiswa">Nama Beasiswa</label>
                    <input type="text" id="nama_beasiswa" name="nama_beasiswa" class="w-full px-4 py-2 rounded border border-gray-300 dark:border-gray-700 dark:bg-gray-700 dark:text-gray-100 focus:outline-none focus:ring-2 focus:ring-[#5452D7]" required>
                </div>
                <div>
                    <label class="block text-gray-700 dark:text-gray-300 mb-1" for="periode">Periode</label>
                    <input type="text" id="periode" name="periode" class="w-full px-4 py-2 rounded border border-gray-300 dark:border-gray-700 dark:bg-gray-700 dark:text-gray-100 focus:outline-none focus:ring-2 focus:ring-[#5452D7]" required>
                </div>
                <div>
                    <label class="block text-gray-700 dark:text-gray-300 mb-1" for="keterangan">Keterangan</label>
                    <textarea id="keterangan" name="keterangan" rows="3" class="w-full px-4 py-2 rounded border border-gray-300 dark:border-gray-700 dark:bg-gray-700 dark:text-gray-100 focus:outline-none focus:ring-2 focus:ring-[#5452D7]" required></textarea>
                </div>
                <div class="flex justify-end space-x-2 pt-4">
                    <button
                        type="button"
                        onclick="closeFormModal()"
                        class="px-4 py-2 bg-gray-300 dark:bg-gray-600 text-gray-800 dark:text-gray-100 rounded hover:bg-gray-400 transition"
                    >
                        Batal
                    </button>
                    <button
                        type="submit"
                        class="px-6 py-2 bg-[#5452D7] hover:bg-[#4442c0] text-white rounded transition"
                    >
                        Simpan
                    </button>
                </div>
            </form>
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

        function openFormModal() {
            document.getElementById('formModal').classList.remove('hidden');
        }

        function closeFormModal() {
            document.getElementById('formModal').classList.add('hidden');
        }
    </script>
</x-app-layout>
