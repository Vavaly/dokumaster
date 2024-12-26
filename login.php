<?php
session_start();

// Sertakan file koneksi database
require_once 'functions/config.php';  // Periksa apakah path file db.php sesuai

// Variabel pesan error
$error = '';

// Proses login
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Query untuk mengambil data pengguna berdasarkan email
    $sql = "SELECT user_id, role, password FROM users WHERE email = ?";
    $stmt = $conn->prepare($sql);  // Pastikan $conn tersedia
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        // Verifikasi password jika tidak di-hash
        if ($password === $row['password']) {
            $_SESSION['user_id'] = $row['user_id'];
            $_SESSION['role'] = $row['role'];

            // Arahkan berdasarkan role
            if ($row['role'] === 'admin') {
                header('Location: admin/dashboard.php');
            } else {
                header('Location: user/home.php');
            }
            exit();
        } else {
            $error = 'Password salah!';
        }
    } else {
        $error = 'Email tidak ditemukan!';
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dokumaster</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f5f7fb;
        }

        .hover-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(70, 70, 70, 0.15);
        }

        .password-strength {
            height: 4px;
            transition: width 0.3s ease;
        }
    </style>
</head>

<body class="font-inter bg-gray-100">
    <div class="fixed inset-0 z-50 flex items-center justify-center overflow-y-auto mt-16">
        <div class="relative w-full max-w-md bg-white rounded-2xl shadow-xl border border-gray-200">
            <div class="px-6 py-4 border-b border-gray-200 flex items-center justify-between">
                <nav class="flex space-x-4">
                    <a href="#"
                        class="text-gray-700 font-semibold border-b-2 border-gray-700 pb-2 inline-flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                            <path fill-rule="evenodd"
                                d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z"
                                clip-rule="evenodd" />
                        </svg>
                        Sign In
                    </a>
                </nav>
                <button class="text-gray-400 hover:text-gray-600">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div class="p-6">
                <?php if (!empty($error)): ?>
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
                        <span class="block sm:inline"><?php echo htmlspecialchars($error); ?></span>
                    </div>
                <?php endif; ?>

                <form class="space-y-6" id="loginForm" method="POST">
                    <div>
                        <label for="email" class="block w-full text-sm font-medium text-gray-700 mb-2">Email
                            address</label>
                        <input type="email" id="email" name="email" required placeholder="you@gmail.com"
                            class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-gray-500 focus:border-gray-500" />
                    </div>
                    <div>
                        <label for="password"
                            class="block w-full text-sm font-medium text-gray-700 mb-2">Password</label>
                        <div class="relative">
                            <input type="password" id="password" name="password" required
                                placeholder="Enter your password" minlength="8"
                                class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-gray-500 focus:border-gray-500" />
                            <div id="passwordStrength" class="mt-1 flex">
                                <div class="password-strength w-0 bg-red-500"></div>
                                <div class="password-strength w-0 bg-yellow-500 ml-1"></div>
                                <div class="password-strength w-0 bg-green-500 ml-1"></div>
                            </div>
                            <button type="button" id="togglePassword"
                                class="absolute inset-y-0 right-0 flex items-center px-3 text-gray-500 hover:text-gray-700">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path
                                        d="M2.5 10C3.857 6.865 6.6 5 10 5s6.143 1.865 7.5 5c-1.357 3.135-4.1 5-7.5 5S3.857 13.135 2.5 10z" />
                                    <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <input id="remember" type="checkbox"
                                class="h-4 w-4 text-gray-600 focus:ring-gray-500 border-gray-300 rounded" />
                            <label for="remember" class="ml-2 block text-sm text-gray-900">
                                Remember me
                            </label>
                        </div>
                    </div>
                    <div>
                        <button type="submit"
                            class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-gray-600 hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">
                            Sign In
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        // Toggle password visibility
        document.getElementById('togglePassword').addEventListener('click', function () {
            const passwordInput = document.getElementById('password');
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
            } else {
                passwordInput.type = 'password';
            }
        });
    </script>
</body>

</html>