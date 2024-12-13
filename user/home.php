<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Manajemen Dokumen Sekolah</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');

        body {
            font-family: 'Inter', sans-serif;
            background-color: #f5f7fb;
        }

        .gradient-sidebar {
            background: linear-gradient(135deg, #374151 0%, #1f2937 100%);
        }

        .hover-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(70, 70, 70, 0.15);
        }
    </style>
</head>
<body class="antialiased">
    <!-- Header Modern -->
    <header class="bg-white shadow-md fixed top-0 left-0 right-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-3 flex justify-between items-center">
            <div class="flex items-center space-x-4">
                <img src="../public/images/pp.jpg" alt="Logo Sekolah" class="h-10 w-10 rounded-full">
                <div>
                    <h2 id="greeting" class="text-xl font-semibold text-gray-700">Selamat Siang, Rival</h2>
                    <p id="date-time" class="text-sm text-gray-500">Senin, 08 Desember 2024</p>
                </div>
            </div>
            <div class="flex items-center space-x-4">
                <div class="flex items-center space-x-2 bg-gray-100 px-3 py-1 rounded-full">
                    <i class="ri-sun-line text-gray-600"></i>
                    <span class="text-gray-700">30°C</span>
                </div>
                <div class="relative">
                    <img src="../public/images/pp.jpg" alt="Profil" class="h-10 w-10 rounded-full cursor-pointer ring-2 ring-gray-700" id="profileImage">
                    <div id="dropdownMenu" class="absolute right-0 mt-2 w-48 bg-white rounded-lg shadow-lg border border-gray-100 hidden">
                        <ul class="py-1">
                            <li class="px-4 py-2 hover:bg-gray-100 cursor-pointer hover:text-gray-700 transition">Profil</li>
                            <li class="px-4 py-2 hover:bg-gray-100 cursor-pointer hover:text-gray-700 transition">
                                <a href="setting.php" class="block w-full h-full">Pengaturan</a>
                            </li>
                            <li class="px-4 py-2 hover:bg-red-50 cursor-pointer text-red-500 hover:text-red-700 transition">Keluar</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Konten Utama dengan Sidebar -->
    <div class="flex mt-16">
        <!-- Sidebar Modern dengan Gradient Gray-700 -->
        <aside class="w-64 gradient-sidebar text-white min-h-screen p-6">
            <div class="flex items-center mb-6">
                <i class="ri-folder-4-line text-3xl mr-3"></i>
                <h2 class="text-2xl font-bold">Menu Navigasi</h2>
            </div>
            <nav>
                <ul class="space-y-2">
                    <li>
                        <a href="#" class="flex items-center space-x-3 py-3 px-4 rounded-lg hover:bg-white/20 transition">
                            <i class="ri-folder-2-line"></i>
                            <span>Dokumen</span>
                        </a>
                        <ul class="pl-6 mt-2 space-y-1">
                            <li><a href="#" class="block py-1 hover:bg-white/10 rounded">Laporan Weekly</a></li>
                            <li><a href="#" class="block py-1 hover:bg-white/10 rounded">Surat Resmi</a></li>
                            <li><a href="#" class="block py-1 hover:bg-white/10 rounded">Berkas</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="flex items-center space-x-3 py-3 px-4 rounded-lg hover:bg-white/20 transition">
                            <i class="ri-upload-cloud-line"></i>
                            <span>Upload Dokumen</span>
                        </a>
                    </li>
                    <li>
                        <a href="setting.php" class="flex items-center space-x-3 py-3 px-4 rounded-lg hover:bg-white/20 transition">
                            <i class="ri-settings-3-line"></i>
                            <span>Pengaturan</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </aside>

        <!-- Area Konten Utama -->
        <main class="flex-grow p-8 bg-gray-50">
            <div class="max-w-full">
                <div class="grid grid-cols-4 gap-6 mb-8">
                    <div class="bg-white p-6 rounded-xl shadow-md hover-card transition-all border-l-4 border-gray-700">
                        <div class="flex justify-between items-center">
                            <div>
                                <h3 class="text-lg font-semibold text-gray-700">Total Dokumen</h3>
                                <p class="text-3xl font-bold text-gray-700">254</p>
                            </div>
                            <i class="ri-file-text-line text-4xl text-gray-300"></i>
                        </div>
                    </div>
                    <div class="bg-white p-6 rounded-xl shadow-md hover-card transition-all border-l-4 border-gray-700">
                        <div class="flex justify-between items-center">
                            <div>
                                <h3 class="text-lg font-semibold text-gray-700">Dokumen Baru</h3>
                                <p class="text-3xl font-bold text-gray-700">12</p>
                            </div>
                            <i class="ri-folder-add-line text-4xl text-gray-300"></i>
                        </div>
                    </div>
                    <div class="bg-white p-6 rounded-xl shadow-md hover-card transition-all border-l-4 border-gray-700">
                        <div class="flex justify-between items-center">
                            <div>
                                <h3 class="text-lg font-semibold text-gray-700">Pengguna</h3>
                                <p class="text-3xl font-bold text-gray-700">42</p>
                            </div>
                            <i class="ri-user-line text-4xl text-gray-300"></i>
                        </div>
                    </div>
                    <div class="bg-white p-6 rounded-xl shadow-md hover-card transition-all border-l-4 border-gray-700">
                        <div class="flex justify-between items-center">
                            <div>
                                <h3 class="text-lg font-semibold text-gray-700">Ruang Penyimpanan</h3>
                                <p class="text-3xl font-bold text-gray-700">75%</p>
                            </div>
                            <i class="ri-database-line text-4xl text-gray-300"></i>
                        </div>
                    </div>
                </div>
        
                <!-- Tabel Dokumen dengan Desain Modern -->
                <div class="bg-white rounded-xl shadow-md p-6">
                    <div class="flex justify-between items-center mb-6">
                        <h2 class="text-2xl font-bold text-gray-700">Daftar Dokumen</h2>
                        <input type="file" id="file-upload" class="hidden" accept=".pdf,.doc,.docx,.xls,.xlsx,.png,.jpg,.jpeg,.txt">
                        <button class="bg-gray-700 text-white px-4 py-2 rounded-lg hover:opacity-90 transition flex items-center" onclick="document.getElementById('file-upload').click();">
                            <i class="ri-add-line mr-2"></i> Unggah Dokumen
                        </button>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="w-full">
                            <thead class="bg-gray-100">
                                <tr>
                                    <th class="px-4 py-3 text-left text-gray-700">Nama File</th>
                                    <th class="px-4 py-3 text-left text-gray-700">Tipe</th>
                                    <th class="px-4 py-3 text-left text-gray-700">Ukuran</th>
                                    <th class="px-4 py-3 text-left text-gray-700">Tanggal</th>
                                    <th class="px-4 py-3 text-center text-gray-700">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="border-b hover:bg-gray-100">
                                    <td class="px-4 py-3">Laporan_RPL_2023.pdf</td>
                                    <td class="px-4 py-3">PDF</td>
                                    <td class="px-4 py-3">2.5 MB</td>
                                    <td class="px-4 py-3">08 Des 2024</td>
                                    <td class="px-4 py-3 text-center">
                                        <div class="flex justify-center space-x-2">
                                            <button class="text-gray-600 hover:text-gray-700 transition"><i class="ri-eye-line"></i></button>
                                            <button class="text-blue-600 hover:text-blue-700 transition"><i class="ri-edit-line"></i></button>
                                            <button class="text-red-600 hover:text-red-700 transition"><i class="ri-delete-bin-line"></i></button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <!-- Footer Modern -->
    <footer class="bg-white shadow-md py-4">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex justify-between items-center">
            <p class="text-gray-500">&copy; 2024 Sistem Manajemen Dokumen Sekolah</p>
            <img src="../public/images/logoas.png" alt="Logo Sekolah" class="h-8 w-auto">
        </div>
    </footer>

    <script src="../public/js/main.js"></script>
</body>
</html>