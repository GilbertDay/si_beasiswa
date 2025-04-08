<x-app-layout>

    <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">
        <div class="grid grid-cols-12 gap-6">
            <div class="col-span-full xl:col-span-12 xl:col-span-6 bg-white dark:bg-gray-800 shadow-xs rounded-xl">
                <div class="px-5 pt-5">
                    <header class="flex justify-between items-start mb-2">
                        <h2 class="text-lg font-semibold text-gray-800 dark:text-gray-100">Pengajuan Beasiswa</h2>
                    </header>

                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-200 mb-1">Nama Mahasiswa</label>
                        <input type="text" placeholder="Silahkan isi nama lengkap"
                            class="w-full px-3 py-2 border rounded-md text-sm bg-white dark:bg-gray-700 dark:border-gray-600 dark:text-white" />
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 dark:text-gray-200 mb-1">NIM</label>
                            <input rows="3"
                                class="w-full px-3 py-2 border rounded-md text-sm bg-white dark:bg-gray-700 dark:border-gray-600 dark:text-white" placeholder="Silahkan isi nim"/>
                        </div>
                        <div>
                            <label
                                class="block text-sm font-medium text-gray-700 dark:text-gray-200 mb-1">Semester</label>
                            <select
                                class="w-full px-3 py-3 py-2 border rounded-md text-sm bg-white dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                                <option value="">-- Pilih Semester --</option>
                                <option value="">1</option>
                                <option value="">2</option>
                                <option value="">3</option>
                                <option value="">4</option>
                                <option value="">5</option>
                                <option value="">6</option>
                                <option value="">7</option>
                                <option value="">8</option>
                            </select>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 dark:text-gray-200 mb-1">Program
                                Studi</label>
                            <select
                                class="w-full px-3 py-3 py-2 border rounded-md text-sm bg-white dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                                <option value="">-- Pilih Program Studi --</option>
                                <option value="">Teknik Informatika</option>
                                <option value="">Sistem Informasi</option>
                                <option value="">Management</option>
                                <option value="">Kedokteran</option>
                                <option value="">Akuntansi</option>
                                <option value="">Teologi</option>
                                <option value="">Arsitektur</option>
                                <option value="">Desain Produk</option>
                                <option value="">Biologi</option>
                                <option value="">Bahasa Inggris</option>
                                <option value="">Studi Humanitas</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 dark:text-gray-200 mb-1">IPK Terakhir</label>
                            <input rows="3"
                                class="w-full px-3 py-2 border rounded-md text-sm bg-white dark:bg-gray-700 dark:border-gray-600 dark:text-white"  placeholder="Silahkan isi ipk terakhir"></textarea>
                        </div>
                    </div>
                    <div class="mb-4 mt-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 dark:text-gray-200 mb-1">Program
                                Studi</label>
                            <select
                                class="w-full px-3 py-3 py-2 border rounded-md text-sm bg-white dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                                <option value="">-- Pilih Beasiswa --</option>
                                <option value="">Beasiswa UKDW Scholarship</option>
                                <option value="">Beasiswa Schranton</option>
                                <option value="">Beasiswa KIP</option>
                                <option value="">Beasiswa Prestasi</option>
                                <option value="">Beasiswa TALENTA Duta Wacana</option>
                                <option value="">Beasiswa SAMAPTA</option>
                                <option value="">Beasiswa Afirmasi Pendidikan (ADiK)</option>
                                <option value="">Beasiswa Kebutuhan</option>
                                <option value="">Beasiswa Bank BPD DIY</option>
                                <option value="">Beasiswa Prestasi Akademik Mahasiswa</option>
                                <option value="">Beasiswa Prestasi Umum Mahasiswa (Seni/Olahraga/Softskill)
                                </option>
                                <option value="">Beasiswa ADARO</option>
                                <option value="">Beasiswa GKI PONDOK INDAH, GKI KEBAYORAN BARU, SINODE GKJW,
                                    SINODE GKJ, SINODE GKP</option>
                                <option value="">Beasiswa Anak Karyawan UKDW</option>
                            </select>
                        </div>
                    </div>
                    <!-- Tombol Unggah File -->
                    <div class="mb-4">
                        <label for="file_upload"
                            class="block text-sm font-medium text-gray-700 dark:text-gray-200 mb-1">Unggah
                            Berkas</label>
                            <label class="inline-flex items-center px-4 py-2 bg-gray-200 dark:border-gray-600 text-black text-sm font-medium rounded-md cursor-pointer hover:bg-gray-500 transition">
                                Pilih File
                                <input type="file" class="hidden" />
                              </label>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>


</x-app-layout>
