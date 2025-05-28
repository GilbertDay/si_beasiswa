<x-app-layout>
    <div class="col-span-full xl:col-span-8 bg-white dark:bg-gray-800 shadow-xs rounded-xl m-4 relative">


        <div class="p-3"
            x-data="{
                createModalOpen: false,
                editModalId: {{ session('old_input.edit_id') ?? 'null' }},
                deleteModalId: null
            }">

            <header class="px-5 py-4 border-b border-gray-100 dark:border-gray-700/60 flex justify-between items-center">
                <h2 class="font-semibold text-gray-800 dark:text-gray-100">Kategori Beasiswa</h2>

                <div class="mb-4 flex justify-end">
                    <button
                        @click="createModalOpen = true"
                        class="px-4 py-2 bg-[#5452D7] hover:bg-[#4442c0] text-white rounded transition"
                    >
                        + Tambah Beasiswa
                    </button>
                </div>
            </header>

            <hr class="border-gray-100 dark:border-gray-700/60 mb-4">

            @if ($errors->any())
                <div class="mb-4 text-sm text-red-600 dark:text-red-400">
                    <ul class="list-disc pl-5">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

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
                                <div class="font-bold text-left">Jenis</div>
                            </th>
                            <th class="p-2 w-1/4">
                                <div class="font-bold text-left">Semester</div>
                            </th>
                            <th class="p-2 w-1/4">
                                <div class="font-bold text-left">Tanggal Buka</div>
                            </th>
                            <th class="p-2 w-1/4">
                                <div class="font-bold text-left">Tanggal Tutup</div>
                            </th>
                            <th class="p-2 w-1/4">
                                <div class="font-bold text-left">Syarat</div>
                            </th>
                            <th class="p-2 w-1/4">
                                <div class="font-bold text-left">Nominal</div>
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
                                    <div class="text-gray-800 dark:text-gray-100">{{ $beasiswa->jenis_beasiswa }}</div>
                                </div>
                            </td>
                            <td class="p-2 w-1/4">
                                <div class="flex items-start">
                                    <div class="text-gray-800 dark:text-gray-100">{{ $beasiswa->semester->kode_semester }}</div>
                                </div>
                            </td>
                            <td class="p-2 w-1/4">
                                <div class="flex items-start">
                                    <div class="text-gray-800 dark:text-gray-100">{{ $beasiswa->tanggal_buka }}</div>
                                </div>
                            </td>
                            <td class="p-2 w-1/4">
                                <div class="flex items-start">
                                    <div class="text-gray-800 dark:text-gray-100">{{ $beasiswa->tanggal_tutup }}</div>
                                </div>
                            </td>
                            <td class="p-2 w-1/4">
                                <div class="flex items-start">
                                    <div class="text-gray-800 dark:text-gray-100">{{ $beasiswa->syarat }}</div>
                                </div>
                            </td>
                            <td class="p-2 w-1/4">
                                <div class="flex items-start">
                                    <div class="text-gray-800 dark:text-gray-100">
                                        {{ 'Rp. ' . number_format($beasiswa->nominal, 0, ',', '.') }}
                                    </div>
                                </div>
                            </td>

                            <td class="p-2 w-1/4">
                                <div class="flex items-start">
                                    <div class="text-gray-800 dark:text-gray-100">
                                    <a
                                    @click="editModalId = {{ $beasiswa->id }}"
                                    class="text-[#5452D7] hover:text-[#4442c0] mr-3 cursor-pointer"
                                    >
                                        <i class="fas fa-edit text-2xl"></i>
                                    </a>
                                    <a
                                    @click="deleteModalId = {{ $beasiswa->id }}"
                                    class="text-red-500 hover:text-red-700 cursor-pointer"
                                    >
                                        <i class="fas fa-trash text-2xl"></i>
                                    </a>
                                    </div>
                                </div>
                            </td>
                            <!-- <td class="p-2 w-1/4">
                                <button
                                    @click="editModalId = {{ $beasiswa->id }}"
                                    class="bg-[#5452D7] hover:bg-[#4442c0] text-white px-4 py-2 rounded transition"
                                >
                                    Syarat
                                </button>
                            </td> -->
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>




            <!-- Modal Tambah -->
            <div
                x-show="createModalOpen"
                x-transition
                class="fixed inset-0 z-50 flex items-center justify-center"
                style="display: none; background-color: rgba(0, 0, 0, 0.5);"
            >
                <div @click.away="createModalOpen = false" class="bg-white dark:bg-gray-800 rounded-lg shadow-lg w-11/12 md:w-1/2 p-6">
                <div class="flex justify-between items-center border-b pb-2">
                    <h5 class="text-lg font-semibold text-gray-800 dark:text-white">Tambah Beasiswa</h5>
                    <button @click="createModalOpen = false" class="text-gray-400 hover:text-gray-600 text-xl">&times;</button>
                </div>

                <div class="mt-4 text-gray-700 dark:text-gray-300 space-y-1">
                    <form action="{{ route('addKategoriBeasiswa') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-2">
                            <label for="nama_beasiswa" class="block text-gray-700 dark:text-gray-300 mb-1">Nama Beasiswa</label>
                            <input type="text" id="nama_beasiswa" name="nama_beasiswa"
                                class="w-full px-4 py-2 rounded border border-gray-300 dark:border-gray-700 dark:bg-gray-700 dark:text-gray-100 focus:outline-none focus:ring-2 focus:ring-[#5452D7]"
                                required>
                        </div>
                        <div class="mb-2">
                            <label for="jenis_beasiswa" class="block text-gray-700 dark:text-gray-300 mb-1">Jenis Beasiswa</label>
                            <input type="text" id="jenis_beasiswa" name="jenis_beasiswa"
                                class="w-full px-4 py-2 rounded border border-gray-300 dark:border-gray-700 dark:bg-gray-700 dark:text-gray-100 focus:outline-none focus:ring-2 focus:ring-[#5452D7]"
                                required>
                        </div>
                        <div class="mb-2">
                            <label for="semester_id" class="block text-gray-700 dark:text-gray-300 mb-1">Semester</label>
                            <select id="semester_id" name="semester_id"
                                class="w-full px-4 py-2 rounded border border-gray-300 dark:border-gray-700 dark:bg-gray-700 dark:text-gray-100 focus:outline-none focus:ring-2 focus:ring-[#5452D7]"
                                required>
                                <option value="">Pilih Semester</option>
                                @foreach ($semester as $item)
                                    <option value="{{ $item->id }}">{{ $item->kode_semester.' - '.$item->tahun_ajaran }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-2">
                            <label for="nominal" class="block text-gray-700 dark:text-gray-300 mb-1">Nominal</label>
                            <input type="number" id="nominal" name="nominal"
                                class="w-full px-4 py-2 rounded border border-gray-300 dark:border-gray-700 dark:bg-gray-700 dark:text-gray-100 focus:outline-none focus:ring-2 focus:ring-[#5452D7]"
                                required>
                        </div>
                        <div class="grid grid-cols-2 gap-2 mb-2">
                            <div>
                                <label for="tanggal_buka" class="block text-gray-700 dark:text-gray-300 mb-1">Tanggal Buka</label>
                                <input type="date" id="tanggal_buka" name="tanggal_buka"
                                    class="w-full px-4 py-2 rounded border border-gray-300 dark:border-gray-700 dark:bg-gray-700 dark:text-gray-100 focus:outline-none focus:ring-2 focus:ring-[#5452D7]"
                                    required>
                            </div>
                            <div>
                                <label for="tanggal_tutup" class="block text-gray-700 dark:text-gray-300 mb-1">Tanggal Tutup</label>
                                <input type="date" id="tanggal_tutup" name="tanggal_tutup"
                                    class="w-full px-4 py-2 rounded border border-gray-300 dark:border-gray-700 dark:bg-gray-700 dark:text-gray-100 focus:outline-none focus:ring-2 focus:ring-[#5452D7]"
                                    required>
                            </div>
                        </div>
                        <div>
                            <label for="syarat" class="block text-gray-700 dark:text-gray-300 mb-1">Syarat</label>
                            <textarea id="syarat" name="syarat" rows="4"
                                class="w-full px-4 py-2 rounded border border-gray-300 dark:border-gray-700 dark:bg-gray-700 dark:text-gray-100 focus:outline-none focus:ring-2 focus:ring-[#5452D7]"
                                required></textarea>
                        </div>
                        <div class="mt-6 flex justify-end gap-2">
                            <button @click="createModalOpen = false" type="button" class="px-4 py-2 bg-gray-200 hover:bg-gray-300 rounded">Batal</button>
                            <button type="submit" class="px-4 py-2 bg-[#5452D7] hover:bg-[#4442c0] text-white rounded transition">Tambah</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

            <!-- Modal per beasiswa -->
            @foreach ($beasiswas as $beasiswa)
            <div
                x-show="editModalId === {{ $beasiswa->id }}"
                x-transition
                class="fixed inset-0 z-50 flex items-center justify-center"
                style="display: none; background-color: rgba(0, 0, 0, 0.5);"
            >
                <div @click.away="editModalId = null" class="bg-white dark:bg-gray-800 rounded-lg shadow-lg w-11/12 md:w-1/2 p-6">
                    <!-- Modal header -->
                    <div class="flex justify-between items-center border-b pb-2">
                        <h5 class="text-lg font-semibold text-gray-800 dark:text-white">Edit Beasiswa</h5>
                        <button @click="editModalId = null" class="text-gray-400 hover:text-gray-600 text-xl">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="mt-4 text-gray-700 dark:text-gray-300 space-y-1">
                        @if ($errors->any() && old('edit_id') == $beasiswa->id)
                            <div class="mb-4 text-sm text-red-600 dark:text-red-400">
                                <ul class="list-disc pl-5">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form action="{{ route('updateKategoriBeasiswa', $beasiswa->id) }}" method="POST">
                            @csrf
                            <input type="hidden" name="edit_id" value="{{ $beasiswa->id }}">
                            <div class="mb-2">
                                <label for="nama_beasiswa" class="block text-gray-700 dark:text-gray-300 mb-1">Nama Beasiswa</label>
                                <input type="text" id="nama_beasiswa" name="nama_beasiswa" class="w-full px-4 py-2 rounded border border-gray-300 dark:border-gray-700 dark:bg-gray-700 dark:text-gray-100 focus:outline-none focus:ring-2 focus:ring-[#5452D7]" value="{{ old('nama_beasiswa', $beasiswa->nama_beasiswa) }}"
                                required>
                            </div>
                            <div class="mb-2">
                                <label for="jenis_beasiswa" class="block text-gray-700 dark:text-gray-300 mb-1">Jenis Beasiswa</label>
                                <input type="text" id="jenis_beasiswa" name="jenis_beasiswa" class="w-full px-4 py-2 rounded border border-gray-300 dark:border-gray-700 dark:bg-gray-700 dark:text-gray-100 focus:outline-none focus:ring-2 focus:ring-[#5452D7]" value="{{ old('jenis_beasiswa', $beasiswa->jenis_beasiswa) }}" required>
                            </div>

                            <div class="mb-2">
                                <label for="nominal" class="block text-gray-700 dark:text-gray-300 mb-1">Nominal</label>
                                <input type="number" id="nominal" name="nominal" class="w-full px-4 py-2 rounded border border-gray-300 dark:border-gray-700 dark:bg-gray-700 dark:text-gray-100 focus:outline-none focus:ring-2 focus:ring-[#5452D7]" value="{{ old('nominal', $beasiswa->nominal) }}" required>
                            </div>
                            <div class="mb-2">
                                <label for="semester_id" class="block text-gray-700 dark:text-gray-300 mb-1">Semester</label>
                                <select id="semester_id" name="semester_id" class="w-full px-4 py-2 rounded border border-gray-300 dark:border-gray-700 dark:bg-gray-700 dark:text-gray-100 focus:outline-none focus:ring-2 focus:ring-[#5452D7]" required>
                                    <option value="">Pilih Semester</option>
                                    @foreach ($semester as $item)
                                        <option value="{{ $item->id }}" {{ old('semester_id', $beasiswa->semester_id) == $item->id ? 'selected' : '' }}>{{ $item->kode_semester.' - '.$item->tahun_ajaran }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="grid grid-cols-2 gap-2 mb-2">
                            <div >
                                <label for="tanggal_buka" class="block text-gray-700 dark:text-gray-300 mb-1">Tanggal Buka</label>
                                <input type="date" id="tanggal_buka" name="tanggal_buka" class="w-full px-4 py-2 rounded border border-gray-300 dark:border-gray-700 dark:bg-gray-700 dark:text-gray-100 focus:outline-none focus:ring-2 focus:ring-[#5452D7]" value="{{ old('tanggal_buka', $beasiswa->tanggal_buka) }}" required>
                            </div>
                            <div>
                                <label for="tanggal_tutup" class="block text-gray-700 dark:text-gray-300 mb-1">Tanggal Tutup</label>
                                <input type="date" id="tanggal_tutup" name="tanggal_tutup" class="w-full px-4 py-2 rounded border border-gray-300 dark:border-gray-700 dark:bg-gray-700 dark:text-gray-100 focus:outline-none focus:ring-2 focus:ring-[#5452D7]" value="{{ old('tanggal_tutup', $beasiswa->tanggal_tutup) }}" required>
                            </div>
                            </div>
                            <div>
                                <label for="syarat" class="block text-gray-700 dark:text-gray-300 mb-1">Syarat</label>
                                <textarea id="syarat" name="syarat" rows="4" class="w-full px-4 py-2 rounded border border-gray-300 dark:border-gray-700 dark:bg-gray-700 dark:text-gray-100 focus:outline-none focus:ring-2 focus:ring-[#5452D7]" required>{{ old('syarat', $beasiswa->syarat) }}</textarea>
                            </div>
                            <div class="mt-6 flex justify-end gap-2">
                                <button @click="editModalId = null" type="button" class="px-4 py-2 bg-gray-200 hover:bg-gray-300 rounded">Tutup</button>
                                <button type="submit" class="px-4 py-2 bg-[#5452D7] hover:bg-[#4442c0] text-white rounded transition">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Modal Hapus -->
            <div
                x-show="deleteModalId === {{ $beasiswa->id }}"
                x-transition
                class="fixed inset-0 z-50 flex items-center justify-center"
                style="display: none; background-color: rgba(0, 0, 0, 0.5);"
            >
                <div @click.away="deleteModalId = null" class="bg-white dark:bg-gray-800 rounded-lg shadow-lg w-11/12 md:w-1/2 p-6">
                    <div class="flex justify-between items-center border-b pb-2">
                        <h5 class="text-lg font-semibold text-gray-800 dark:text-white">Hapus Beasiswa</h5>
                        <button @click="deleteModalId = null" class="text-gray-400 hover:text-gray-600 text-xl">&times;</button>
                    </div>
                    <div class="mt-4 text-gray-700 dark:text-gray-300 space-y-1">
                        <p>Apakah Anda yakin ingin menghapus beasiswa {{ $beasiswa->nama_beasiswa }}?</p>
                        <div class="mt-6 flex justify-end gap-2">
                            <button @click="deleteModalId = null" type="button" class="px-4 py-2 bg-gray-200 hover:bg-gray-300 rounded">Tutup</button>
                            <form action="{{ route('deleteKategoriBeasiswa', $beasiswa->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="px-4 py-2 bg-[#5452D7] hover:bg-[#4442c0] text-white rounded transition">Hapus</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>


    <!-- Modal: Form Tambah Beasiswa -->


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
