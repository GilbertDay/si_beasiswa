<x-app-layout>
    <div class="col-span-full xl:col-span-8 bg-white dark:bg-gray-800 shadow-xs rounded-xl m-4">
        <header class="px-5 py-4 border-b border-gray-100 dark:border-gray-700/60">
            <h2 class="font-semibold text-gray-800 dark:text-gray-100">Riwayat</h2>
        </header>
        <div class="p-3">

            <!-- Table -->


            <div class="overflow-x-auto" x-data="{ openModalId: null }">
                <table class="table-fixed w-full dark:text-gray-300">
                    <!-- Table header -->
                    <thead class="text-xs uppercase text-gray-800 dark:text-gray-500 bg-gray-50 dark:bg-gray-700/50 rounded-xs">
                        <tr>
                            <th class="p-2 w-1/12 bg-[#404CB8]/15">
                                <div class="font-bold text-left">No</div>
                            </th>
                            <th class="p-2 w-1/4 bg-[#404CB8]/15">
                                <div class="font-bold text-start">No Pengajuan</div>
                            </th>
                            <th class="p-2 w-1/4 bg-[#404CB8]/15">
                                <div class="font-bold text-start">Tanggal Pengajuan</div>
                            </th>
                            <th class="p-2 w-1/4 bg-[#404CB8]/15">
                                <div class="font-bold text-start">Nama Mahasiswa</div>
                            </th>
                            <th class="p-2 w-1/4 bg-[#404CB8]/15">
                                <div class="font-bold text-start">Beasiswa</div>
                            </th>
                            <th class="p-2 w-1/4 bg-[#404CB8]/15">
                                <div class="font-bold text-start">Status</div>
                            </th>
                        </tr>
                    </thead>
                    <!-- Table body -->
                    <tbody class="text-sm font-medium divide-y divide-gray-100 dark:divide-gray-700/60">
                        <!-- Row -->
                        @foreach ($pengajuans as $pengajuan)   
                        <tr>
                            <td class="p-2 w-1/12">
                                <div class="flex items-start">
                                    <div class="text-gray-800 dark:text-gray-100">{{ $loop->iteration }}</div>
                                </div>
                            </td>
                            <td class="p-2 w-1/4">
                                <div class="text-start text-gray-500">{{ $pengajuan->nom_pengajuan }}</div>
                            </td>
                            <td class="p-2 w-1/4">
                                <div class="text-start text-gray-500">{{ $pengajuan->created_at->format('d-m-Y') }}</div>
                            </td>
                            <td class="p-2 w-1/4">
                                <div class="text-start text-gray-500">{{ $pengajuan->user->name }}</div>
                            </td>
                            <td class="p-2 w-1/4">
                                <div class="text-start text-gray-500">{{ $pengajuan->beasiswa->nama_beasiswa }}</div>
                            </td>
                            <td class="p-2 w-1/4">
                                @if($pengajuan->status == 'pending')
                                <div class="text-start text-gray-700 py-2 px-2.5 bg-yellow-200 w-fit rounded">Pending</div>
                                @else
                                <button
                                    @click="openModalId = {{ $pengajuan->id }}"
                                    class="bg-[#3835d0] hover:bg-[#4253c0] text-white cursor-pointer px-4 py-2 rounded transition text-sm"
                                >
                                    Check
                                </button>
                                @endif
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <!-- Modal Check Penguman -->
                 @foreach ($pengajuans as $pengajuan)
                 <div
                    x-show="openModalId === {{ $pengajuan->id }}"
                    x-transition
                    class="fixed inset-0 z-50 flex items-center justify-center"
                    style="display: none; background-color: rgba(0, 0, 0, 0.5);"
                >
                    <div @click.away="openModalId = null" class="bg-white dark:bg-gray-800 rounded-lg shadow-lg w-full max-w-xl p-6">
                        <!-- Modal header -->
                        <div class="flex justify-between items-center border-b pb-2">
                            <h5 class="text-lg font-semibold text-gray-800 dark:text-white">Info Pengajuan</h5>
                            <button @click="openModalId = null" class="text-gray-400 hover:text-gray-600 text-xl">&times;</button>
                        </div>

                        <!-- Modal body -->
                        <div class="mt-4 text-gray-700 dark:text-gray-300 space-y-1">
                        <div class="overflow-x-auto">
                            <table class="table-fixed w-full dark:text-gray-300">
                                <!-- Table header -->
                                <thead class="text-xs uppercase text-gray-800 dark:text-gray-500 bg-gray-50 dark:bg-gray-700/50 rounded-xs">
                                    <tr>
                                        <th class="p-2 w-1/4 bg-[#404CB8]/15">
                                            <div class="font-bold text-left">Informasi</div>
                                        </th>
                                        <th class="p-2 w-1/4 bg-[#404CB8]/15">
                                            <div class="font-bold text-start">Detail</div>
                                        </th>
                                    </tr>
                                </thead>
                                <!-- Table body -->
                                <tbody class="text-sm font-medium divide-y divide-gray-100 dark:divide-gray-700/60">
                                    <!-- Row -->
                                    <tr>
                                        <td class="p-2 w-1/4">
                                            <div class="flex items-start">
                                                <div class="text-gray-800 dark:text-gray-100">Nama Mahasiswa</div>
                                            </div>
                                        </td>
                                        <td class="p-2 w-1/4">
                                            <div class="text-start text-gray-500">{{ $pengajuan->user->name }}</div>
                                        </td>
                                    </tr>
                                    <!-- Row -->
                                    <tr>
                                        <td class="p-2 w-1/4">
                                            <div class="flex items-start">
                                                <div class="text-gray-800 dark:text-gray-100">NIM</div>
                                            </div>
                                        </td>
                                        <td class="p-2 w-1/4">
                                            <div class="text-start text-gray-500">{{ $pengajuan->user->NIM }}</div>
                                        </td>
                                    </tr>
                                    <!-- Row -->
                                    <tr>
                                        <td class="p-2 w-1/4">
                                            <div class="flex items-start">
                                                <div class="text-gray-800 dark:text-gray-100">Nama Beasiswa</div>
                                            </div>
                                        </td>
                                        <td class="p-2 w-1/4">
                                            <div class="text-start text-gray-500">{{ $pengajuan->beasiswa->nama_beasiswa }}</div>
                                        </td>
                                    </tr>
                                    <!-- Row -->
                                    <tr>
                                        <td class="p-2 w-1/4">
                                            <div class="flex items-start">
                                                <div class="text-gray-800 dark:text-gray-100">Semester</div>
                                            </div>
                                        </td>
                                        <td class="p-2 w-1/4">
                                            <div class="text-start text-gray-500">{{ $pengajuan->smtr_pengajuan }}</div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="p-2 w-1/4">
                                            <div class="flex items-start">
                                                <div class="text-gray-800 dark:text-gray-100">No Penerimaan</div>
                                            </div>
                                        </td>
                                        <td class="p-2 w-1/4">
                                            <div class="text-start text-gray-500">{{ $pengajuan->nom_terima }}</div>
                                        </td>
                                    </tr>
                                    <!-- Row -->
                                    <tr>
                                        <td class="p-2 w-1/4">
                                            <div class="flex items-start">
                                                <div class="text-gray-800 dark:text-gray-100">Status Penerimaan</div>
                                            </div>
                                        </td>
                                        <td class="p-2 w-1/4">
                                            <div class="text-start text-gray-600 font-bold">{{ $pengajuan->status == 'accepted' ? 'Diterima' : 'Tidak Diterima' }}</div>
                                        </td>
                                    </tr>
                                    <!-- Row -->
                                    <tr>
                                        <td class="p-2 w-1/4">
                                            <div class="flex items-start">
                                                <div class="text-gray-800 dark:text-gray-100">Tanggal Pengumuman</div>
                                            </div>
                                        </td>
                                        <td class="p-2 w-1/4">
                                            <div class="text-start text-gray-500">{{ $pengajuan->updated_at->format('d-m-Y') }}</div>
                                        </td>
                                    </tr>
                                    <!-- Row -->
                                    <tr>
                                        <td class="p-2 w-1/4">
                                            <div class="flex items-start">
                                                <div class="text-gray-800 dark:text-gray-100">Keterangan</div>
                                            </div>
                                        </td>
                                        <td class="p-2 w-1/4">
                                            <div class="text-start text-gray-500">{{ $pengajuan->status == 'accepted' ? 'Selamat! Anda telah diterima sebagai penerima ' . $pengajuan->beasiswa->nama_beasiswa : 'Mohon Maaf anda tidak diterima' }}</div>
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
                    <!-- Modal footer -->
                    <div class="mt-6 flex justify-end">
                        <button @click="openModalId = null" class="px-4 py-2 bg-gray-200 hover:bg-gray-300 rounded">Tutup</button>
                    </div>
                </div>
                </div>
            @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
