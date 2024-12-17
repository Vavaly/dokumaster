<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manajemen Dokumen - Dashboard Pengguna</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap');

        body {
            font-family: 'Inter', sans-serif;
            background-color: #f5f7fb;
        }

        .sidebar {
            background: linear-gradient(135deg, #374151 0%, #1f2937 100%);
        }

        .hover-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(70, 70, 70, 0.15);
        }

        .main-content {
            background-color: #eef2f5;
        }

        .card-icon {
            color: #374151;
        }

        .card-title {
            color: #374151;
        }

        .link:hover {
            background-color: #1f2937;
        }

        .notification-icon {
            color: #374151;
        }

        .profile-img:hover {
            border-color: #374151;
        }

        .button-primary {
            background-color: #374151;
            color: #fff;
        }

        .button-primary:hover {
            background-color: #273036;
        }
    </style>
</head>

<body class="antialiased">

    <!-- Header -->
    <header class="bg-white shadow-md fixed top-0 left-0 right-0 z-50">
        <div class="w-full mx-auto px-4 sm:px-6 lg:px-8 flex items-center justify-between h-24">
            <!-- Logo -->
            <div class="flex items-center space-x-4">
                <img src="../public/images/logo.png" alt="Logo" class="h-[180px] mt-4 w-auto">
            </div>
            <!-- Cuaca dan Waktu di Tengah -->
            <div class="absolute left-1/2 transform -translate-x-1/2 flex items-center space-x-4">
                <div class="flex items-center space-x-2 bg-gray-100 px-3 py-1 rounded-full shadow">
                    <i class="ri-sun-line text-gray-600"></i>
                    <span class="text-gray-700 font-medium">30°C</span>
                </div>
                <span class="text-gray-700 font-medium">
                    <i class="bi bi-clock"></i> 07:29 WIB
                </span>
                <span class="text-gray-700 font-medium">
                    <i class="bi bi-calendar"></i> Monday, 26 August 2024
                </span>
            </div>
            <!-- Profil, Greeting, dan Username di Kanan -->
            <div class="flex items-center space-x-4 ml-auto">
                <h2 id="greeting" class="text-xl font-semibold text-gray-700">Selamat pagi,</h2>
                <button class="focus:outline-none" id="profileToggle">
                    <img src="../public/images/pp.jpg" alt="Profil"
                        class="h-10 w-10 rounded-full cursor-pointer ring-2 ring-gray-700">
                </button>
                <span class="text-gray-700 font-medium">Rival</span>
                <div id="dropdownMenu"
                    class="absolute right-0 mt-2 w-48 bg-white rounded-lg shadow-lg border border-gray-200 hidden opacity-0 transition-all duration-300 ease-in-out">
                    <ul class="py-1">
                        <li class="px-4 py-2 hover:bg-gray-100 cursor-pointer hover:text-gray-700 transition">
                            <a href="#" class="block">Profil</a>
                        </li>
                        <li class="px-4 py-2 hover:bg-gray-100 cursor-pointer hover:text-gray-700 transition">
                            <a href="setting.php" class="block">Pengaturan</a>
                        </li>
                        <li class="px-4 py-2 text-red-500 hover:bg-red-50 cursor-pointer hover:text-red-700 transition">
                            <a href="#" class="block">Keluar</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>

    <div class="flex h-screen pt-24">
        <!-- Sidebar Modern untuk Pengguna -->
        <div class="w-64 bg-gradient-to-br bg-gray-800 text-white min-h-screen p-6">
            <div class="flex items-center mb-8">
                <i class="ri-folder-line mr-3 text-4xl"></i>
                <h1 class="text-xl font-bold">Dokumen Saya</h1>
            </div>

            <nav>
                <ul class="space-y-2">
                    <li>
                        <a href="home.php" class="flex items-center px-4 py-2 rounded-lg bg-white/20 transition link">
                            <i class="ri-home-line mr-3"></i>Home
                        </a>
                    </li>
                    <li class="relative">
                        <a href="document.php"
                            class="flex items-center px-4 py-2 rounded-lg hover:bg-white/20 transition link">
                            <i class="ri-folder-2-line mr-3"></i>Dokumen Saya
                        </a>
                        <!-- Submenu (hidden by default) -->
                        <ul class="ml-6 space-y-2 hidden" id="submenu-dokumen">
                            <li>
                                <a href="add_folder.php"
                                    class="flex items-center px-4 py-2 rounded-lg hover:bg-white/20 transition link">
                                    <i class="ri-folder-add-line mr-3"></i>Tambah Folder
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>

        <!-- Konten Utama -->
        <div class="flex-1 overflow-y-auto main-content p-8">
            <!-- Header Konten -->
            <div class="flex justify-between items-center mb-8">
                <h1 class="text-3xl font-bold text-gray-800">Dokumen Saya</h1>
                <div class="flex items-center space-x-4">
                    <div class="bg-white shadow rounded-full p-2 profile-img">
                        <i class="ri-notification-line notification-icon"></i>
                    </div>
                </div>
            </div>

            <!-- Filter dan Pencarian -->
            <div class="mb-6 flex justify-between">
                <div class="flex space-x-4">
                    <select class="bg-white border rounded-lg px-3 py-2">
                        <option>Semua Kategori</option>
                        <option>Dokumen Pribadi</option>
                        <option>Dokumen Kerja</option>
                        <option>Lainnya</option>
                    </select>
                    <input type="text" placeholder="Cari dokumen..." class="border rounded-lg px-3 py-2 w-64">
                </div>
                <button
                    class="bg-gray-700 text-white px-4 py-2 rounded-lg hover:bg-gray-800 transition flex items-center">
                    <i class="ri-add-line mr-2"></i> Unggah Dokumen Baru
                </button>
            </div>

            <!-- Tabel Dokumen Pengguna -->
            <div class="bg-white rounded-xl shadow-md p-6">
                <table class="w-full">
                    <thead>
                        <tr class="border-b">
                            <th class="text-left py-3 px-2">Nama Dokumen</th>
                            <th class="text-left py-3 px-2">Kategori</th>
                            <th class="text-left py-3 px-2">Ukuran</th>
                            <th class="text-left py-3 px-2">Tanggal Dibuat</th>
                            <th class="text-left py-3 px-2">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-b hover:bg-gray-50 transition">
                            <td class="py-3 px-2 flex items-center">
                                <i class="ri-file-line mr-2 text-gray-700"></i>
                                Laporan_Proyek.pdf
                            </td>
                            <td class="py-3 px-2">
                                <span class="bg-green-100 text-green-800 px-2 py-1 rounded-full text-xs">
                                    Dokumen Kerja
                                </span>
                            </td>
                            <td class="py-3 px-2">500 KB</td>
                            <td class="py-3 px-2">15 Des 2024</td>
                            <td class="py-3 px-2">
                                <div class="flex space-x-2">
                                    <button class="text-gray-700 hover:text-gray-900">
                                        <i class="ri-eye-line"></i>
                                    </button>
                                    <button class="text-gray-700 hover:text-gray-900">
                                        <i class="ri-download-line"></i>
                                    </button>
                                    <button class="text-red-500 hover:text-red-700">
                                        <i class="ri-delete-bin-line"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>

                <!-- Pagination -->
                <div class="flex justify-end items-center mt-6 space-x-2">
                    <!-- Tombol Sebelumnya -->
                    <button
                        class="bg-gray-300 text-gray-600 px-4 py-2 rounded-lg hover:bg-gray-400 transition">&lt;</button>
                    <!-- Numbering di Samping Kanan -->
                    <div class="flex items-center space-x-2">
                        <button class="bg-gray-300 text-gray-600 px-4 py-2 rounded-lg transition">1</button>
                    </div>
                    <!-- Tombol Berikutnya -->
                    <button
                        class="bg-gray-300 text-gray-600 px-4 py-2 rounded-lg hover:bg-gray-400 transition">&gt;</button>
                </div>
            </div>

        </div>
    </div>
    <!-- Footer -->
    <footer class="bg-white shadow-md p-6 w-[calc(100%-16rem)] ml-auto">
        <div class="w-full mx-auto text-center text-gray-600">
            © 2024 Dokumaster. All rights reserved.
        </div>
    </footer>
</body>

</html>