<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengaturan Profil</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center p-4">
    <div class="bg-white shadow-lg rounded-lg p-8 w-full max-w-md">
        <div class="flex items-center mb-6">
            <a href="#" class="mr-4 text-gray-600 hover:text-gray-800 transition">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                </svg>
            </a>
            <h2 class="text-2xl font-bold text-gray-800 text-center flex-grow">Pengaturan Profil</h2>
        </div>
        
        <!-- Bagian Foto Profil -->
        <div class="mb-6 flex flex-col items-center">
            <div class="relative mb-4">
                <img 
                    src="../public/images/pp.jpg" 
                    alt="Foto Profil" 
                    class="w-32 h-32 rounded-full object-cover border-4 border-gray-300"
                >
                <label 
                    for="profile-upload" 
                    class="absolute bottom-0 right-0 bg-gray-800 text-white p-2 rounded-full cursor-pointer hover:bg-gray-700 transition"
                >
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M4 5a2 2 0 00-2 2v8a2 2 0 002 2h12a2 2 0 002-2V7a2 2 0 00-2-2h-1.586a1 1 0 01-.707-.293l-1.414-1.414A1 1 0 0011.586 3H8.414a1 1 0 00-.707.293L6.293 4.707A1 1 0 015.586 5H4zm6 9a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd" />
                    </svg>
                    <input 
                        type="file" 
                        id="profile-upload" 
                        class="hidden" 
                        accept="image/*"
                    >
                </label>
            </div>
            <p class="text-gray-600 text-sm">Klik ikon kamera untuk mengganti foto profil</p>
        </div>

        <!-- Formulir Ganti Kata Sandi -->
        <form class="space-y-4">
            <div>
                <label for="current-password" class="block text-gray-700 mb-2">
                    Kata Sandi Saat Ini
                </label>
                <div class="relative">
                    <input 
                        type="password" 
                        id="current-password" 
                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-gray-800"
                        placeholder="Masukkan kata sandi saat ini"
                    >
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 absolute right-3 top-3 text-gray-500" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
                    </svg>
                </div>
            </div>

            <div>
                <label for="new-password" class="block text-gray-700 mb-2">
                    Kata Sandi Baru
                </label>
                <div class="relative">
                    <input 
                        type="password" 
                        id="new-password" 
                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-gray-800"
                        placeholder="Masukkan kata sandi baru"
                    >
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 absolute right-3 top-3 text-gray-500" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
                    </svg>
                </div>
            </div>

            <div>
                <label for="confirm-password" class="block text-gray-700 mb-2">
                    Konfirmasi Kata Sandi Baru
                </label>
                <div class="relative">
                    <input 
                        type="password" 
                        id="confirm-password" 
                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-gray-800"
                        placeholder="Konfirmasi kata sandi baru"
                    >
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 absolute right-3 top-3 text-gray-500" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
                    </svg>
                </div>
            </div>

            <button 
                type="submit" 
                class="w-full bg-gray-800 text-white py-2 rounded-md hover:bg-gray-700 transition duration-300"
            >
                Perbarui Kata Sandi
            </button>
        </form>
    </div>
</body>
</html>