<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <style>
        /* Tampilan Umum */
/* --- Tampilan Umum --- */
body {
    font-family: 'Poppins', sans-serif;
    background: linear-gradient(to bottom right, #1e3c72, #2a5298);
    margin: 0;
    padding: 0;
    color: #fff;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    animation: fadeIn 1.5s ease-in-out;
}

h1 {
    font-size: 2.5rem;
    text-align: center;
    margin-bottom: 30px;
    color: #f9f9f9;
    animation: slideDown 1s ease-in-out;
}

/* --- Link dan Tombol --- */
a, button {
    display: inline-block;
    margin: 10px;
    padding: 10px 20px;
    background: #4caf50;
    color: white;
    text-decoration: none;
    font-size: 1rem;
    border: none;
    border-radius: 8px;
    transition: background 0.3s ease, transform 0.3s ease;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
    cursor: pointer;
}

a:hover, button:hover {
    background: #45a049;
    transform: translateY(-3px);
}

a:active, button:active {
    transform: translateY(1px);
}

button.logout {
    background: #dc3545;
}

button.logout:hover {
    background: #b52a35;
}

/* --- Formulir --- */
form {
    background: rgba(255, 255, 255, 0.1);
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
    max-width: 400px;
    width: 90%;
    text-align: center;
    animation: fadeIn 2s ease-in-out;
}

label {
    font-size: 1rem;
    margin-bottom: 5px;
    color: #fff;
    display: block;
    text-align: left;
}

input[type="text"], input[type="email"], input[type="password"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
    outline: none;
    font-size: 1rem;
}

/* --- Animasi --- */
@keyframes fadeIn {
    from {
        opacity: 0;
    }
    to {
        opacity: 1;
    }
}

@keyframes slideDown {
    from {
        transform: translateY(-20px);
        opacity: 0;
    }
    to {
        transform: translateY(0);
        opacity: 1;
    }
}

/* --- Ikon --- */
.icon {
    font-size: 3rem;
    margin-bottom: 20px;
    color: #4caf50;
    animation: bounce 2s infinite;
}

@keyframes bounce {
    0%, 100% {
        transform: translateY(0);
    }
    50% {
        transform: translateY(-10px);
    }
}

    </style>
</head>
<body>
    <h1>Halaman Login</h1>
    <form action="{{ route('login') }}" method="POST">
        @csrf
        <label for="email">Email:</label>
        <input type="email" id="email" name="email"><br><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password"><br><br>
        <button type="submit">Login</button>
    </form>
    <a href="{{ route('home') }}">Kembali</a>
</body>
</html>
