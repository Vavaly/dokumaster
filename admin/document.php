<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manajemen Dokumen - Dashboard Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
</head>

<body class="antialiased font-[Inter] bg-[#f5f7fb]">
    <div class="flex h-screen">
        <!-- Sidebar Modern -->
        <div class="w-64 bg-gradient-to-br from-gray-700 to-gray-800 text-white p-6">
            <div class="flex items-center mb-8">
                <i class="ri-folder-line mr-3 text-4xl"></i>
                <h1 class="text-xl font-bold">Dokumen Admin</h1>
            </div>

            <nav>
                <ul class="space-y-2">
                    <li>
                        <a href="dashboard.php"
                            class="flex items-center px-4 py-2 rounded-lg hover:bg-white/20 transition duration-200">
                            <i class="ri-dashboard-line mr-3"></i>Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="users.php"
                            class="flex items-center px-4 py-2 rounded-lg hover:bg-white/20 transition duration-200">
                            <i class="ri-user-settings-line mr-3"></i>Manajemen Pengguna
                        </a>
                    </li>
                    <li>
                        <a href="document.php"
                            class="flex items-center px-4 py-2 rounded-lg hover:bg-white/20 transition duration-200">
                            <i class="ri-folder-2-line mr-3"></i>Dokumen
                        </a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center px-4 py-2 rounded-lg hover:bg-white/20 transition duration-200">
                            <i class="ri-settings-3-line mr-3"></i>Pengaturan
                        </a>
                    </li>
                </ul>
            </nav>
        </div>

        <!-- Konten Utama -->
        <div class="flex-1 overflow-y-auto bg-[#eef2f5] p-8">
            <!-- Header -->
            <div class="flex justify-between items-center mb-8">
                <h1 class="text-3xl font-bold text-gray-800">Manajemen Dokumen</h1>
                <div class="flex items-center space-x-4">
                    <div class="bg-white shadow rounded-full p-2 hover:border-gray-700 transition duration-200">
                        <i class="ri-notification-line text-gray-700"></i>
                    </div>
                    <img src="../public/images/pp.jpg" alt="Profil" class="h-10 w-10 rounded-full">
                </div>
            </div>

            <!-- Filter dan Pencarian -->
            <div class="mb-6 flex justify-between">
                <div class="flex space-x-4">
                    <select class="bg-white border rounded-lg px-3 py-2">
                        <option>Semua Kategori</option>
                        <option>Dokumen Resmi</option>
                        <option>Laporan</option>
                        <option>Surat</option>
                    </select>
                    <input type="text" placeholder="Cari dokumen..." class="border rounded-lg px-3 py-2 w-64">
                </div>
                <button
                    class="bg-gray-700 text-white px-4 py-2 rounded-lg hover:bg-gray-800 transition duration-200 flex items-center">
                    <i class="ri-add-line mr-2"></i> Unggah Dokumen
                </button>
            </div>

            <!-- Tabel Manajemen Dokumen -->
            <div class="bg-white rounded-xl shadow-md p-6">
                <table class="w-full">
                    <thead>
                        <tr class="border-b">
                            <th class="text-left py-3 px-2">ID</th>
                            <th class="text-left py-3 px-2">Nama Dokumen</th>
                            <th class="text-left py-3 px-2">Kategori</th>
                            <th class="text-left py-3 px-2">Pemilik</th>
                            <th class="text-left py-3 px-2">Ukuran</th>
                            <th class="text-left py-3 px-2">Tanggal Dibuat</th>
                            <th class="text-left py-3 px-2">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-b hover:bg-gray-50 transition duration-200">
                            <td class="py-3 px-2">1</td>
                            <td class="py-3 px-2 flex items-center">
                                <i class="ri-file-line mr-2 text-gray-700"></i>
                                Dokumen_1.pdf
                            </td>
                            <td class="py-3 px-2">
                                <span class="bg-green-100 text-green-800 px-2 py-1 rounded-full text-xs">
                                    Dokumen Resmi
                                </span>
                            </td>
                            <td class="py-3 px-2">Rival</td>
                            <td class="py-3 px-2">500 KB</td>
                            <td class="py-3 px-2">01 Jan 2024</td>
                            <td class="py-3 px-2">
                                <div class="flex space-x-2">
                                    <button class="text-gray-700 hover:text-gray-900 transition duration-200">
                                        <i class="ri-eye-line"></i>
                                    </button>
                                    <button class="text-gray-700 hover:text-gray-900 transition duration-200">
                                        <i class="ri-download-line"></i>
                                    </button>
                                    <button class="text-blue-600 hover:text-blue-700 transition duration-200">
                                        <i class="ri-edit-line"></i>
                                    </button>
                                    <button class="text-red-500 hover:text-red-700 transition duration-200">
                                        <i class="ri-delete-bin-line"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr class="border-b hover:bg-gray-50 transition duration-200">
                            <td class="py-3 px-2">2</td>
                            <td class="py-3 px-2 flex items-center">
                                <i class="ri-file-line mr-2 text-gray-700"></i>
                                Dokumen_2.pdf
                            </td>
                            <td class="py-3 px-2">
                                <span class="bg-green-100 text-green-800 px-2 py-1 rounded-full text-xs">
                                    Laporan
                                </span>
                            </td>
                            <td class="py-3 px-2">Lutfi</td>
                            <td class="py-3 px-2">750 KB</td>
                            <td class="py-3 px-2">02 Jan 2024</td>
                            <td class="py-3 px-2">
                                <div class="flex space-x-2">
                                    <button class="text-gray-700 hover:text-gray-900 transition duration-200">
                                        <i class="ri-eye-line"></i>
                                    </button>
                                    <button class="text-gray-700 hover:text-gray-900 transition duration-200">
                                        <i class="ri-download-line"></i>
                                    </button>
                                    <button class="text-blue-600 hover:text-blue-700 transition duration-200">
                                        <i class="ri-edit-line"></i>
                                    </button>
                                    <button class="text-red-500 hover:text-red-700 transition duration-200">
                                        <i class="ri-delete-bin-line"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>

                <!-- Pagination -->
                <div class="flex justify-between items-center mt-6">
                    <span class="text-gray-600">Halaman 1 dari 10</span>
                    <div class="flex items-center justify-center space-x-4">
                        <button class="bg-gray-300 text-gray-700 px-4 py-2 rounded-lg flex items-center">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" stroke-width="2"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"></path>
                            </svg>
                            Prev
                        </button>
                        <span class="text-gray-700 font-medium">1</span>
                        <button class="bg-gray-300 text-gray-700 px-4 py-2 rounded-lg flex items-center">
                            Next
                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" stroke-width="2"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>