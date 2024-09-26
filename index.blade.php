<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <script src="{{ asset('assets/tailwind/tailwind.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('assets/fontawesome/css/all.min.css') }}">
    <link rel="shortcut icon" href="{{ asset('img/logo.png') }}" type="image/x-icon">

</head>
<body class="flex items-center justify-center min-h-screen bg-cover" style="background-image: url('img/login-bg.png');">
    <div class="absolute top-0 left-0 right-0 flex justify-center mt-8">
        <img alt="Tokopedia logo" class="h-8" src="{{ asset('img/logo.png') }}" width="150"/>
    </div>
    <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md mx-4 relative z-10">
        <h2 class="text-center text-2xl font-semibold mb-4">Masuk ke Tokopedia</h2>
        <div class="text-center mb-4">
            <a class="text-green-600" href="{{ route('register') }}">Daftar</a>
        </div>
        <form method="POST" action="">
        <div class="mb-4">
        <input class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-600" placeholder="Email" name="email" type="email" required />
        <p class="text-gray-500 text-sm mt-1">Contoh: aldy@gmail.com</p>
            </div>
            <div class="mb-4">
                <input class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-600" placeholder="Password" name="password" type="password" required />
                <p class="text-gray-500 text-sm mt-1">Contoh: aldy@gmail.com</p>
            </div>
            <div class="flex justify-between items-center mb-4">
                <button type="submit" name="submit" class="bg-green-600 text-white w-full py-3 rounded-lg hover:bg-green-500 transition duration-300">
                    Selanjutnya
                </button>
            </div>

            <div class="text-center mb-4">
                <a class="text-green-600" href="#">Butuh bantuan?</a>
            </div>
            <div class="text-center mb-4">
                <span class="text-gray-500">atau masuk dengan</span>
            </div>
            <div class="flex flex-col space-y-4">
                <button class="flex items-center justify-center border border-gray-300 py-3 rounded-lg">
                    <i class="fas fa-qrcode mr-2 text-blue-600"></i> <!-- Warna biru untuk QR -->
                    Scan Kode QR
                </button>
                <button class="flex items-center justify-center border border-gray-300 py-3 rounded-lg">
                    <i class="fab fa-google mr-2 text-red-600"></i> <!-- Warna merah untuk Google -->
                    Google
                </button>
            </div>
        </form>
    </div>
</body>
</html>
