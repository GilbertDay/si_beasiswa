<x-app-layout>

    <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">
        <div class="grid grid-cols-12 gap-6">
            <div class="col-span-full xl:col-span-12 xl:col-span-6 bg-white dark:bg-gray-800 shadow-xs rounded-xl pb-3">
                <div class="px-5 pt-5">
                    <header class="flex justify-between items-start mb-2">
                        <h2 class="text-lg font-semibold text-gray-800 dark:text-gray-100">Pengajuan Beasiswa</h2>
                    </header>
                    @if (session('success'))
                        <div class="bg-green-500 text-white p-4 mb-4">
                            {{ session('success') }}
                        </div>
                    @endif
                    <form action="{{ route('addPengajuanBeasiswa') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">

                            <div>
                                <label
                                    class="block text-sm font-medium text-gray-700 dark:text-gray-200 mb-1">Semester</label>
                                <select
                                    name="semester"
                                    class="w-full px-3 py-3 py-2 border rounded-md text-sm bg-white dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                                    <option value="">-- Pilih Semester --</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                </select>
                            </div>

                        <div class="mb-4 mt-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 dark:text-gray-200 mb-1">Beasiswa
                                </label>
                                <select
                                    name="beasiswa"
                                    class="w-full px-3 py-3 py-2 border rounded-md text-sm bg-white dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                                    <option value="">-- Pilih Beasiswa --</option>
                                    @foreach ($beasiswas as $beasiswa)
                                        <option value="{{ $beasiswa->id }}">{{ $beasiswa->nama_beasiswa }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <!-- Tombol Unggah File -->
                        <div class="mb-4">
                            <label for="file_upload"
                                class="block text-sm font-medium text-gray-700 dark:text-gray-200 mb-1">Unggah
                                Berkas</label>
                                <label class="inline-flex items-center px-4 py-2 bg-gray-200 text-black text-sm font-medium rounded-md cursor-pointer hover:bg-gray-300 transition">
                                    <input type="file" name="file_upload" />
                                </label>
                        </div>
                        <div>
                            <button type="submit"
                                class="w-full px-4 py-2 bg-[#5452D7] text-white font-medium rounded-md hover:bg-[#5452D7]/90 transition">Ajukan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>


</x-app-layout>
