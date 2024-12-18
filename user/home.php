<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dokumaster</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
</head>

<body class="min-h-screen flex flex-col bg-gray-800 font-sans antialiased">
    <!-- Header -->
    <header class="bg-white shadow-md fixed top-0 left-0 right-0 z-50">
        <div class="w-full mx-auto px-4 sm:px-6 lg:px-8 flex items-center justify-between h-24">
            <!-- Logo -->
            <div class="flex items-center space-x-4">
                <img src="../public/images/logo.png" alt="Logo" class="h-[180px] mt-4 w-auto">
            </div>

            <!-- Weather, Time, Date in Center -->
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

            <!-- Profile and Dropdown -->
            <div class="flex items-center space-x-4 ml-auto">
                <h2 class="text-xl font-semibold text-gray-700">Selamat pagi,</h2>
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

    <!-- Main Content Wrapper -->
    <div class="flex flex-grow mt-24">
        <!-- Sidebar -->
        <aside class="w-64 bg-gradient-to-br bg-gray-800 text-white min-h-screen p-6">
            <div class="flex items-center mb-6">
                <i class="ri-folder-4-line text-3xl mr-3"></i>
                <h2 class="text-2xl font-bold">Menu Navigasi</h2>
            </div>
            <nav>
                <ul class="space-y-2">
                <li>
                        <a href="home.php" class="flex items-center px-4 py-2 rounded-lg bg-white/20 transition link">
                            <i class="ri-home-line mr-3"></i>Home
                        </a>
                    </li>
                    <li>
                        <a href="document.php"
                            class="flex items-center space-x-3 py-3 px-4 rounded-lg hover:bg-white/30 transition duration-200 group">
                            <i class="ri-folder-2-line text-lg"></i>
                            <span class="text-sm lg:text-base">Dokumen</span>
                        </a>
                    </li>
                    <li>
                        <a href="setting.php"
                            class="flex items-center space-x-3 py-3 px-4 rounded-lg hover:bg-white/30 transition duration-200 group">
                            <i class="ri-settings-3-line text-lg"></i>
                            <span class="text-sm lg:text-base">Pengaturan</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </aside>

        <!-- Main Content Area -->
        <main class="flex-grow p-8 bg-gray-50">
            <div class="max-w-full">
                <!-- Statistics Grid -->
                <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
                    <div
                        class="bg-white p-6 rounded-xl shadow-md hover:translate-y-[-5px] transition-all border-l-4 border-gray-700">
                        <div class="flex justify-between items-center">
                            <div>
                                <h3 class="text-lg font-semibold text-gray-700">Total Dokumen</h3>
                                <p class="text-3xl font-bold text-gray-700">254</p>
                            </div>
                            <i class="ri-file-text-line text-4xl text-gray-300"></i>
                        </div>
                    </div>
                </div>

                <!-- Document Table -->
                <div class="bg-white rounded-xl shadow-md p-6">
                    <div class="flex justify-between items-center mb-6">
                        <h2 class="text-2xl font-bold text-gray-700">Daftar Dokumen</h2>
                        <div class="flex items-center space-x-4">
                            <input type="text" placeholder="Cari dokumen..."
                                class="w-60 px-3 py-2 border rounded-lg shadow-sm focus:ring focus:ring-gray-200 transition">
                            <select class="px-3 py-2 border rounded-lg shadow-sm">
                                <option value="terbaru">Terbaru</option>
                                <option value="nama">Nama</option>
                                <option value="kategori">Kategori</option>
                            </select>
                        </div>
                    </div>

                    <!-- Document Table -->
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr class="bg-gray-100 border-b">
                                <th class="py-2 px-4 font-semibold text-gray-600">No</th>
                                <th class="py-2 px-4 font-semibold text-gray-600">Nama Dokumen</th>
                                <th class="py-2 px-4 font-semibold text-gray-600">Kategori</th>
                                <th class="py-2 px-4 font-semibold text-gray-600">Tanggal</th>
                                <th class="py-2 px-4 font-semibold text-gray-600">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="hover:bg-gray-50">
                                <td class="py-2 px-4">1</td>
                                <td class="py-2 px-4">Rencana Pelajaran 2024</td>
                                <td class="py-2 px-4">Pendidikan</td>
                                <td class="py-2 px-4">01/12/2024</td>
                                <td class="py-2 px-4 flex space-x-2">
                                    <button class="text-gray-600 hover:text-gray-700 transition">
                                        <i class="ri-eye-line" title="Lihat"></i>
                                    </button>
                                    <button class="text-blue-600 hover:text-blue-700 transition">
                                        <i class="ri-edit-line" title="Edit"></i>
                                    </button>
                                    <button class="text-red-600 hover:text-red-700">
                                        <i class="ri-delete-bin-line" title="Hapus"></i>
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </main>

    </div>

    <!-- Footer -->
    <footer class="bg-white shadow-md p-6 w-[calc(100%-16rem)] ml-auto">
        <div class="w-full mx-auto text-center text-gray-600">
            © 2024 Dokumaster. All rights reserved.
        </div>
    </footer>
</body>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const profileToggle = document.getElementById('profileToggle');
        const dropdownMenu = document.getElementById('dropdownMenu');

        profileToggle.addEventListener('click', () => {
            if (dropdownMenu.classList.contains('hidden')) {
                dropdownMenu.classList.remove('hidden', 'opacity-0');
                dropdownMenu.classList.add('opacity-100');
            } else {
                dropdownMenu.classList.add('hidden', 'opacity-0');
                dropdownMenu.classList.remove('opacity-100');
            }
        });

        // Menutup dropdown ketika klik di luar
        window.addEventListener('click', (e) => {
            if (!profileToggle.contains(e.target) && !dropdownMenu.contains(e.target)) {
                dropdownMenu.classList.add('hidden', 'opacity-0');
                dropdownMenu.classList.remove('opacity-100');
            }
        });
    });
   </script>

</html>