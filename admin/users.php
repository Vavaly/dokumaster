<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manajemen Pengguna - Dashboard Admin</title>
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
    </style>
</head>

<body class="antialiased">

    <div class="flex h-screen">
        <!-- Bilah Sisi Modern -->
        <div class="w-64 sidebar text-white p-6">
            <div class="flex items-center mb-8">
                <i class="ri-folder-line mr-3 text-4xl"></i>
                <h1 class="text-xl font-bold">Admin Dokumen</h1>
            </div>
            <nav>
                <ul class="space-y-2">
                    <li><a href="dashboard.php"
                            class="flex items-center px-4 py-2 rounded-lg hover:bg-white/20 transition link"><i
                                class="ri-dashboard-line mr-3"></i>Dasbor</a></li>
                    <li><a href="users.php"
                            class="flex items-center px-4 py-2 rounded-lg hover:bg-white/20 transition link"><i
                                class="ri-user-settings-line mr-3"></i>Manajemen Pengguna</a></li>
                    <li><a href="document.php"
                            class="flex items-center px-4 py-2 rounded-lg hover:bg-white/20 transition link"><i
                                class="ri-folder-2-line mr-3"></i>Dokumen</a></li>
                    <li><a href="#" class="flex items-center px-4 py-2 rounded-lg hover:bg-white/20 transition link"><i
                                class="ri-settings-3-line mr-3"></i>Pengaturan</a></li>
                </ul>
            </nav>
        </div>

        <!-- Konten Utama -->
        <div class="flex-1 overflow-y-auto main-content p-8">
            <!-- Header -->
            <div class="flex justify-between items-center mb-8">
                <h1 class="text-3xl font-bold text-gray-800">Manajemen Pengguna</h1>
                <div class="flex items-center space-x-4">
                    <div class="bg-white shadow rounded-full p-2 profile-img">
                        <i class="ri-notification-line notification-icon"></i>
                    </div>
                    <img src="../public/images/pp.jpg" alt="Profil" class="h-10 w-10 rounded-full">
                </div>
            </div>

            <!-- Tombol Tambah Pengguna -->
            <div class="mb-6">
                <button id="openModal"
                    class="bg-gray-700 text-white px-4 py-2 rounded-lg hover:bg-gray-800 transition flex items-center">
                    <i class="ri-user-add-line mr-2"></i>Tambah Pengguna Baru
                </button>
            </div>

            <!-- Modal Pop-up -->
            <div id="userModal"
                class="fixed inset-0 bg-black/50 hidden items-center justify-center z-50 transition-all duration-300 ease-in-out">
                <div
                    class="bg-white w-96 rounded-2xl shadow-2xl transform transition-all duration-300 ease-in-out scale-95 opacity-0">
                    <div class="p-6">
                        <div class="flex justify-between items-center mb-6">
                            <h2 class="text-2xl font-bold text-gray-800">Tambah Pengguna Baru</h2>
                            <button id="closeModal" class="text-gray-500 hover:text-gray-700 transition">
                                <i class="ri-close-line text-2xl"></i>
                            </button>
                        </div>

                        <form>
                            <div class="space-y-4">
                                <div>
                                    <label for="username" class="block text-sm font-medium text-gray-700 mb-2">Nama
                                        Pengguna</label>
                                    <input type="text" id="username"
                                        class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 transition"
                                        placeholder="Masukkan nama pengguna">
                                </div>

                                <div>
                                    <label for="email"
                                        class="block text-sm font-medium text-gray-700 mb-2">Email</label>
                                    <input type="email" id="email"
                                        class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 transition"
                                        placeholder="Masukkan email pengguna">
                                </div>

                                <div>
                                    <label for="password" class="block text-sm font-medium text-gray-700 mb-2">Kata
                                        Sandi</label>
                                    <input type="password" id="password"
                                        class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 transition"
                                        placeholder="Masukkan kata sandi">
                                </div>
                            </div>

                            <div class="flex space-x-4 mt-6">
                                <button type="submit"
                                    class="flex-1 bg-gray-800 text-white py-2 rounded-lg hover:bg-blue-700 transition transform active:scale-95">
                                    Tambah
                                </button>
                                <button type="button" id="cancelModal"
                                    class="flex-1 bg-gray-200 text-gray-800 py-2 rounded-lg hover:bg-gray-300 transition transform active:scale-95">
                                    Batal
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Tabel Manajemen Pengguna -->
            <div class="bg-white rounded-xl shadow-md p-6">
                <table class="w-full">
                    <thead>
                        <tr class="border-b">
                            <th class="text-left py-3 px-2">ID</th>
                            <th class="text-left py-3 px-2">Nama Pengguna</th>
                            <th class="text-left py-3 px-2">Email</th>
                            <th class="text-left py-3 px-2">Peran</th>
                            <th class="text-left py-3 px-2">Tanggal Dibuat</th>
                            <th class="text-left py-3 px-2">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-b hover:bg-gray-50 transition">
                            <td class="py-3 px-2">1</td>
                            <td class="py-3 px-2">Nama Pengguna1</td>
                            <td class="py-3 px-2">user1@example.com</td>
                            <td class="py-3 px-2">
                                <span class="bg-green-100 text-green-800 px-2 py-1 rounded-full text-xs">admin</span>
                            </td>
                            <td class="py-3 px-2">01 Januari 2024</td>
                            <td class="py-3 px-2">
                                <div class="flex space-x-2">
                                    <button class="text-gray-700 hover:text-gray-900">
                                        <i class="ri-edit-line"></i>
                                    </button>
                                    <button class="text-red-500 hover:text-red-700">
                                        <i class="ri-delete-bin-line"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr class="border-b hover:bg-gray-50 transition">
                            <td class="py-3 px-2">2</td>
                            <td class="py-3 px-2">Nama Pengguna2</td>
                            <td class="py-3 px-2">user2@example.com</td>
                            <td class="py-3 px-2">
                                <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded-full text-xs">user</span>
                            </td>
                            <td class="py-3 px-2">02 Januari 2024</td>
                            <td class="py-3 px-2">
                                <div class="flex space-x-2">
                                    <button class="text-gray-700 hover:text-gray-900">
                                        <i class="ri-edit-line"></i>
                                    </button>
                                    <button class="text-red-500 hover:text-red-700">
                                        <i class="ri-delete-bin-line"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <!-- Paginasi -->
                <div class="flex justify-between items-center mt-4">
                    <div class="text-sm text-gray-700">Menampilkan 1 hingga 10 dari 20 entri</div>
                    <div class="flex space-x-2">
                        <button class="bg-gray-300 text-gray-700 px-4 py-2 rounded-lg">Prev</button>
                        <button class="bg-gray-300 text-gray-700 px-4 py-2 rounded-lg">Next</button>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <script>
        // Mendapatkan elemen-elemen modal dan tombol
        const openModalButton = document.getElementById("openModal");
        const closeModalButton = document.getElementById("closeModal");
        const cancelModalButton = document.getElementById("cancelModal");
        const modal = document.getElementById("userModal");
        const modalContent = modal.querySelector('div[class*="bg-white"]');

        // Fungsi untuk menampilkan modal
        function showModal() {
            modal.classList.remove("hidden");
            setTimeout(() => {
                modalContent.classList.remove("scale-95", "opacity-0");
                modalContent.classList.add("scale-100", "opacity-100");
            }, 10);
        }

        // Fungsi untuk menyembunyikan modal
        function hideModal() {
            modalContent.classList.remove("scale-100", "opacity-100");
            modalContent.classList.add("scale-95", "opacity-0");
            setTimeout(() => {
                modal.classList.add("hidden");
            }, 300);
        }

        // Event listener untuk membuka modal
        openModalButton.addEventListener("click", showModal);

        // Event listener untuk menutup modal
        closeModalButton.addEventListener("click", hideModal);
        cancelModalButton.addEventListener("click", hideModal);

        // Tutup modal jika mengklik area di luar modal
        modal.addEventListener("click", (event) => {
            if (event.target === modal) {
                hideModal();
            }
        });
    </script>

</body>

</html>