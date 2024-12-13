<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin - Manajemen Dokumen</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap');
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f4f6f9;
        }
    </style>
</head>
<body class="antialiased">
    <div class="flex h-screen">
        <!-- Sidebar Modern -->
        <div class="w-64 bg-gradient-to-b from-indigo-600 to-purple-700 text-white p-6">
            <div class="flex items-center mb-8">
                <img src="../public/images/logoas.png" alt="Logo" class="h-10 w-10 mr-3 rounded-full">
                <h1 class="text-xl font-bold">Dokumen Admin</h1>
            </div>

            <nav>
                <ul class="space-y-2">
                    <li>
                        <a href="dashboard.php" class="flex items-center px-4 py-2 rounded-lg hover:bg-white/20 transition">
                            <i class="ri-dashboard-line mr-3"></i>Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="manage_users.php" class="flex items-center px-4 py-2 rounded-lg hover:bg-white/20 transition">
                            <i class="ri-user-settings-line mr-3"></i>Manajemen Pengguna
                        </a>
                    </li>
                    <li>
                        <a href="manage_document.php" class="flex items-center px-4 py-2 rounded-lg hover:bg-white/20 transition">
                            <i class="ri-folder-2-line mr-3"></i>Dokumen
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center px-4 py-2 rounded-lg hover:bg-white/20 transition">
                            <i class="ri-settings-3-line mr-3"></i>Pengaturan
                        </a>
                    </li>
                </ul>
            </nav>
        </div>

        <!-- Konten Utama -->
        <div class="flex-1 overflow-y-auto bg-gray-100 p-8">
            <!-- Header -->
            <div class="flex justify-between items-center mb-8">
                <h1 class="text-3xl font-bold text-gray-800">Dashboard</h1>
                <div class="flex items-center space-x-4">
                    <div class="bg-white shadow rounded-full p-2">
                        <i class="ri-notification-line text-gray-600"></i>
                    </div>
                    <img src="../public/images/pp.jpg" alt="Profil" class="h-10 w-10 rounded-full">
                </div>
            </div>

            <!-- Kartu Statistik -->
            <div class="grid grid-cols-4 gap-6 mb-8">
                <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition-all">
                    <div class="flex justify-between items-center">
                        <div>
                            <h3 class="text-sm text-gray-500">Total Dokumen</h3>
                            <p class="text-2xl font-bold text-blue-600">100</p>
                        </div>
                        <i class="ri-file-text-line text-3xl text-blue-200"></i>
                    </div>
                </div>
                
                <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition-all">
                    <div class="flex justify-between items-center">
                        <div>
                            <h3 class="text-sm text-gray-500">Total Pengguna</h3>
                            <p class="text-2xl font-bold text-green-600">50</p>
                        </div>
                        <i class="ri-user-line text-3xl text-green-200"></i>
                    </div>
                </div>
                
                <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition-all">
                    <div class="flex justify-between items-center">
                        <div>
                            <h3 class="text-sm text-gray-500">Dokumen Baru</h3>
                            <p class="text-2xl font-bold text-purple-600">10</p>
                        </div>
                        <i class="ri-folder-add-line text-3xl text-purple-200"></i>
                    </div>
                </div>
                
                <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition-all">
                    <div class="flex justify-between items-center">
                        <div>
                            <h3 class="text-sm text-gray-500">Ruang Penyimpanan</h3>
                            <p class="text-2xl font-bold text-red-600">75%</p>
                        </div>
                        <i class="ri-database-line text-3xl text-red-200"></i>
                    </div>
                </div>
            </div>

            <!-- Bagian Bawah Dashboard -->
            <div class="grid grid-cols-2 gap-8">
                <!-- Dokumen Terbaru -->
                <div class="bg-white rounded-xl shadow-md p-6">
                    <div class="flex justify-between items-center mb-4">
                        <h2 class="text-xl font-bold text-gray-800">Dokumen Terbaru</h2>
                        <a href="#" class="text-blue-500 hover:underline">Lihat Semua</a>
                    </div>
                    <div class="space-y-4">
                        <div class="flex items-center justify-between border-b pb-2 last:border-b-0">
                            <div class="flex items-center">
                                <div class="bg-blue-100 p-2 rounded mr-4">
                                    <i class="ri-file-line text-blue-500"></i>
                                </div>
                                <div>
                                    <p class="font-medium">Dokumen_1.pdf</p>
                                    <p class="text-sm text-gray-500">Diunggah oleh User1</p>
                                </div>
                            </div>
                            <span class="text-sm text-gray-500">01 Jan 2024</span>
                        </div>
                        <div class="flex items-center justify-between border-b pb-2 last:border-b-0">
                            <div class="flex items-center">
                                <div class="bg-blue-100 p-2 rounded mr-4">
                                    <i class="ri-file-line text-blue-500"></i>
                                </div>
                                <div>
                                    <p class="font-medium">Dokumen_2.pdf</p>
                                    <p class="text-sm text-gray-500">Diunggah oleh User2</p>
                                </div>
                            </div>
                            <span class="text-sm text-gray-500">02 Jan 2024</span>
                        </div>
                    </div>
                </div>

                <!-- Pengguna Terbaru -->
                <div class="bg-white rounded-xl shadow-md p-6">
                    <div class="flex justify-between items-center mb-4">
                        <h2 class="text-xl font-bold text-gray-800">Pengguna Terbaru</h2>
                        <a href="#" class="text-blue-500 hover:underline">Lihat Semua</a>
                    </div>
                    <div class="space-y-4">
                        <div class="flex items-center justify-between border-b pb-2 last:border-b-0">
                            <div class="flex items-center">
                                <div class="bg-green-100 p-2 rounded mr-4">
                                    <i class="ri-user-add-line text-green-500"></i>
                                </div>
                                <div>
                                    <p class="font-medium">User1</p>
                                    <p class="text-sm text-gray-500">user1@example.com</p>
                                </div>
                            </div>
                            <span class="text-sm text-gray-500">01 Jan 2024</span>
                        </div>
                        <div class="flex items-center justify-between border-b pb-2 last:border-b-0">
                            <div class="flex items-center">
                                <div class="bg-green-100 p-2 rounded mr-4">
                                    <i class="ri-user-add-line text-green-500"></i>
                                </div>
                                <div>
                                    <p class="font-medium">User2</p>
                                    <p class="text-sm text-gray-500">user2@example.com</p>
                                </div>
                            </div>
                            <span class="text-sm text-gray-500">02 Jan 2024</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
