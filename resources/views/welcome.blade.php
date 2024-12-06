<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Utama</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        /* --- Tampilan Umum --- */
body {
    font-family: 'Poppins', sans-serif;
    background: #f9f9f9;
    margin: 0;
    padding: 0;
    color: #333;
}

h1 {
    font-size: 2rem;
    text-align: center;
    margin: 20px 0;
    color: #444;
}

/* --- Kotak-Kotak --- */
.container {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 20px;
    margin: 20px auto;
    max-width: 1200px;
    padding: 10px;
}

.box {
    width: 300px;
    background: #fff;
    border-radius: 10px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    padding: 20px;
    text-align: center;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.box:hover {
    transform: translateY(-10px);
    box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
}

.box i {
    font-size: 2.5rem;
    margin-bottom: 10px;
    color: #4caf50;
}

.box h2 {
    font-size: 1.5rem;
    margin: 10px 0;
    color: #444;
}

.box p {
    font-size: 1rem;
    color: #666;
    line-height: 1.5;
}

/* --- Tombol --- */
.box a {
    display: inline-block;
    margin-top: 15px;
    padding: 10px 20px;
    background: #4caf50;
    color: white;
    text-decoration: none;
    border-radius: 5px;
    transition: background 0.3s ease, transform 0.2s ease;
}

.box a:hover {
    background: #45a049;
    transform: scale(1.05);
}

/* --- Responsive --- */
@media (max-width: 768px) {
    .box {
        width: 90%;
    }
}

    </style>
</head>
<body>
    <h1>Selamat Datang</h1>
    <div class="container">
        <!-- Kotak 1 -->
        <div class="box">
            <i class="fas fa-user-plus"></i>
            <h2>Daftar</h2>
            <p>Buat akun baru untuk mengakses fitur eksklusif kami.</p>
            <a href="{{ route('daftar') }}">Daftar Sekarang</a>
            <h3>Created By Deni Firmanda</h3>
        </div>
        <!-- Kotak 2 -->
        <div class="box">
            <i class="fas fa-sign-in-alt"></i>
            <h2>Login</h2>
            <p>Masuk untuk mengelola akun dan menggunakan layanan kami.</p>
            <a href="{{ route('login') }}">Masuk</a>
            <h3>Created By Deni Firmanda</h3>
        </div>
        
    </div>
</body>
</html>
