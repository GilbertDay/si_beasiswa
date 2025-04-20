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
                            <th class="p-2 w-1/4"><div class="font-bold text-start">Aksi</div></th>
                        </tr>
                    </thead>
                    <!-- Table body -->
                    <tbody class="text-sm font-medium divide-y divide-gray-100 dark:divide-gray-700/60">
                        <!-- Row -->
                        @foreach ($pengajuan as $item)
                        <tr>
                            <td class="p-2 w-1/4">
                                <div class="text-start text-gray-500">{{ $item->user->name }}</div>
                            </td>
                            <td class="p-2 w-1/4">
                                <div class="text-start text-gray-500">{{ $item->beasiswa->nama_beasiswa }}</div>
                            </td>
                            <td class="p-2 w-1/4">
                                <div class="text-start text-gray-500">{{ $item->tgl_pengajuan }}</div>
                            </td>
                            <td class="p-2 w-1/4">
                            @if ($item->userDocument)
                                <a 
                                    href="{{ asset('storage/berkas/' . $item->userDocument->deskripsi) }}" 
                                    target="_blank"
                                    class="text-blue-500 hover:underline"
                                    title="{{ $item->userDocument->deskripsi }}"
                                    style="max-width: 150px; display: inline-block; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;"
                                >
                                    <!-- {{ \Illuminate\Support\Str::limit($item->userDocument->deskripsi, 20) }} -->
                                    Lihat Dokumen
                                </a>
                            @endif

                            </td>
                            <td class="p-2 w-1/4">
                                <span class="inline-block px-3 py-1 text-xs font-semibold text-yellow-800 bg-yellow-100 rounded-full">{{ $item->status === 'pending' ? 'Diproses' : ($item->status === 'accepted' ? 'Diterima' : 'Ditolak') }}</span>
                            </td>

                            @if($item->status === 'pending')
                            <td class="p-2 w-1/4">
                                <div class="flex gap-2">
                                    <a href="{{ route('updatePengajuan', ['text' => 'acc', 'id' => $item->id]) }}" title="Terima" class="px-2 py-2 bg-green-500 text-white rounded-lg hover:bg-green-600 transition flex items-center justify-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                        </svg>
                                    </a>
                                    <a href="{{ route('updatePengajuan', ['text' => 'reject', 'id' => $item->id]) }}" title="Tolak" class="px-2 py-2 bg-red-500 text-white rounded-lg hover:bg-red-600 transition flex items-center justify-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                        </svg>
                                    </a>
                                </div>
                            </td>
                            @else
                            <td class="p-2 w-1/4">
                                <span class="inline-block px-3 py-1 text-xs font-semibold text-green-800 bg-green-100 rounded-full">{{ $item->status === 'accepted' ? 'Diterima' : 'Ditolak' }}</span>
                            </td>
                            @endif


                        </tr>
                        @endforeach
                    </tbody>
                </table>
                 <!-- Buttons -->
            </div>
        </div>
    </div>
</x-app-layout>
