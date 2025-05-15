<x-app-layout>

    <div class="col-span-full xl:col-span-8 bg-white dark:bg-gray-800 shadow-xs rounded-xl m-4">
        <header class="px-5 py-4 border-b border-gray-100 dark:border-gray-700/60">
            <h2 class="font-semibold text-gray-800 dark:text-gray-100">Laporan Beasiswa</h2>
        </header>

        <div class="px-5 py-4">
            <form action="{{ route('laporanPenerimaFilter') }}" method="POST">
                @csrf
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <select name="program_studi" class="p-2 border rounded-lg dark:bg-gray-700 dark:text-white">
                    <option value="">-- Program Studi --</option>
                    <option value="Manajemen">Manajemen</option>
                    <option value="Sistem Informasi">Sistem Informasi</option>
                    <option value="Informatika">Informatika</option>
                    <option value="Akuntansi">Akuntansi</option>
                </select>
                <select name="jenis_beasiswa" class="p-2 border rounded-lg dark:bg-gray-700 dark:text-white">
                    <option value="">-- Jenis Beasiswa --</option>
                    @foreach ($beasiswas as $beasiswa)
                        <option value="{{ $beasiswa->id }}">{{ $beasiswa->nama_beasiswa }}</option>
                    @endforeach
                </select>

                <div class="flex gap-2">
                    <input type="text" name="semester" placeholder="Semester" class="p-2 border rounded-lg w-1/2 dark:bg-gray-700 dark:text-white">
                    <select name="status_seleksi" placeholder="Status Seleksi" class="p-2 border rounded-lg flex-1 dark:bg-gray-700 dark:text-white">
                        <option value="">-- Status Seleksi --</option>
                        <option value="pending">Diproses</option>
                        <option value="accepted">Diterima</option>
                        <option value="rejected">Ditolak</option>
                    </select>
                </div>
            </div>
            <button type="submit" class="mt-3 cursor-pointer bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition">
                Cari
            </button>
            </form>
        </div>

        <div class="p-3">
            <!-- Table -->
            <div class="overflow-x-auto">
                <table id="pengajuanTable" class="min-w-full table-auto dark:text-gray-300 ">
                    <!-- Table header -->
                    <thead class="text-xs uppercase text-gray-800 dark:text-gray-500 bg-[#404CB8]/15 rounded-xs">
                        <tr>
                            <th class="p-2 w-1/4"><div class="font-bold text-left">Nim</div></th>
                            <th class="p-2 w-1/4"><div class="font-bold text-start">Nama Mahasiswa</div></th>
                            <th class="p-2 w-1/4"><div class="font-bold text-start">Program Studi</div></th>
                            <th class="p-2 w-1/4"><div class="font-bold text-left">Jenis Beasiswa</div></th>
                            <th class="p-2 w-1/4"><div class="font-bold text-start">Semester</div></th>
                            <th class="p-2 w-1/4"><div class="font-bold text-start">Status Seleksi</div></th>
                        </tr>
                    </thead>
                    <!-- Table body -->
                    <tbody >
                        @foreach ($pengajuans as $pengajuan)
                        <tr>
                            <td class="p-2 w-1/4">
                                <div class="text-start text-gray-500">{{ $pengajuan->user->NIM }}</div>
                            </td>
                            <td class="p-2 w-1/4">
                                <div class="text-start text-gray-500">{{ $pengajuan->user->name }}</div>
                            </td>
                            <td class="p-2 w-1/4">
                                <div class="text-start text-gray-500">{{ $pengajuan->user->jurusan }}</div>
                            </td>
                            <td class="p-2 w-1/4">
                                <div class="text-start text-gray-500">{{ $pengajuan->beasiswa->nama_beasiswa }}</div>
                            </td>
                            <td class="p-2 w-1/4">
                                <div class="text-start text-gray-500">{{ $pengajuan->smtr_pengajuan }}</div>
                            </td>
                            <td class="p-2 w-1/4">
                                @php
                                    $statusLabel = match ($pengajuan->status) {
                                        'pending' => 'Diproses',
                                        'accepted' => 'Diterima',
                                        default => 'Ditolak',
                                    };
                                    $statusColor = match ($pengajuan->status) {
                                        'pending' => 'text-yellow-800 bg-yellow-100',
                                        'accepted' => 'text-green-800 bg-green-100',
                                        default => 'text-red-800 bg-red-100',
                                    };
                                @endphp
                                <span class="inline-block px-3 py-1 text-xs font-semibold {{ $statusColor }} rounded-full">
                                    {{ $statusLabel }}
                                </span>
                            </td>

                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#pengajuanTable').DataTable({
            responsive: true,
            autoWidth: true,
            language: {
                search: "Cari:",
                lengthMenu: "Tampilkan _MENU_ entri",
                info: "Menampilkan _START_ sampai _END_ dari _TOTAL_ entri",
                paginate: {
                    first: "Pertama",
                    last: "Terakhir",
                    next: "Berikutnya",
                    previous: "Sebelumnya"
                },
                zeroRecords: "Tidak ditemukan data yang cocok",
                infoEmpty: "Menampilkan 0 sampai 0 dari 0 entri",
                infoFiltered: "(disaring dari _MAX_ total entri)"
            },

            columnDefs: [
                { orderable: false, targets: [4,5] }
            ]
        });
        });
    </script>

</x-app-layout>
