<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manajemen Dokumen - Dashboard Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
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
    <div class="flex h-screen">
        <!-- Sidebar Modern -->
        <div class="w-64 sidebar text-white p-6">
            <div class="flex items-center mb-8">
                <img src="../public/images/pp.jpg" alt="Logo" class="h-10 w-10 mr-3 rounded-full">
                <h1 class="text-xl font-bold">Dokumen Admin</h1>
            </div>

            <nav>
                <ul class="space-y-2">
                    <li>
                        <a href="dashboard.php" class="flex items-center px-4 py-2 rounded-lg hover:bg-white/20 transition link">
                            <i class="ri-dashboard-line mr-3"></i>Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="users.php" class="flex items-center px-4 py-2 rounded-lg hover:bg-white/20 transition link">
                            <i class="ri-user-settings-line mr-3"></i>Manajemen Pengguna
                        </a>
                    </li>
                    <li>
                        <a href="document.php" class="flex items-center px-4 py-2 rounded-lg hover:bg-white/20 transition link">
                            <i class="ri-folder-2-line mr-3"></i>Dokumen
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center px-4 py-2 rounded-lg hover:bg-white/20 transition link">
                            <i class="ri-settings-3-line mr-3"></i>Pengaturan
                        </a>
                    </li>
                </ul>
            </nav>
        </div>

        <!-- Konten Utama -->
        <div class="flex-1 overflow-y-auto main-content p-8">
            <!-- Header -->
            <div class="flex justify-between items-center mb-8">
                <h1 class="text-3xl font-bold text-gray-800">Manajemen Dokumen</h1>
                <div class="flex items-center space-x-4">
                    <div class="bg-white shadow rounded-full p-2 profile-img">
                        <i class="ri-notification-line notification-icon"></i>
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
                <button class="bg-gray-700 text-white px-4 py-2 rounded-lg hover:bg-gray-800 transition flex items-center">
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
                        <tr class="border-b hover:bg-gray-50 transition">
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
                            <td class="py-3 px-2">User1</td>
                            <td class="py-3 px-2">500 KB</td>
                            <td class="py-3 px-2">01 Jan 2024</td>
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
                        <tr class="border-b hover:bg-gray-50 transition">
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
                            <td class="py-3 px-2">User2</td>
                            <td class="py-3 px-2">750 KB</td>
                            <td class="py-3 px-2">02 Jan 2024</td>
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
                <div class="flex justify-between items-center mt-6">
                    <span class="text-gray-600">Halaman 1 dari 10</span>
                    <div class="space-x-2">
                        <button class="bg-gray-200 px-3 py-1 rounded">Sebelumnya</button>
                        <button class="bg-gray-700 text-white px-3 py-1 rounded">Selanjutnya</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
