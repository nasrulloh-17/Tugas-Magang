<?php
// File: index.php

// Fungsi untuk menangani navigasi menu
function renderPage($page) {
    switch ($page) {
        case 'login':
            return "<h1>Halaman Login</h1>
                    <p>Silakan masukkan username dan password Anda.</p>
                    <form method='post' action=''>
                        <label>Username:</label><br>
                        <input type='text' name='username' class='input-field'><br>
                        <label>Password:</label><br>
                        <input type='password' name='password' class='input-field'><br>
                        <button type='submit' class='button'>Login</button>
                    </form>";
        case 'coba':
            return "<h1>Halaman Coba</h1>
                    <p>Ini adalah halaman coba untuk fitur atau konten eksperimen.</p>";
        case 'magang':
            return "<h1>Halaman Magang</h1>
                    <p>Informasi mengenai program magang tersedia di halaman ini.</p>";
        default:
            return "<h1> </h1>
                    <h1>INI ADALAH TUGAS MAGANG</h1>
                    <h2> </h2>
                    <p>Pilih menu di atas untuk melanjutkan.</p>
                    <h2> </h2>
                    <h3>Muhammad Nasrulloh alias Degan</h3>
                    <h3>Ikan hiu makan sepat, nda kenyang</h3>";
    }
}

// Mendapatkan halaman dari parameter URL (default ke halaman utama jika tidak ada)
$page = isset($_GET['page']) ? $_GET['page'] : '';

?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Situs Web Sederhana</title>
    <style>
        /* Reset dasar */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Tampilan body */
        body {
            font-family: Arial, sans-serif;
            background: #f4f4f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        /* Kontainer utama */
        .container {
            width: 80%;
            max-width: 600px;
            background: white;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            padding: 20px;
            border-radius: 10px;
            text-align: center;
        }

        /* Navigasi */
        nav {
            background: #007BFF;
            padding: 10px;
            border-radius: 10px 10px 0 0;
        }

        nav a {
            color: white;
            margin: 0 10px;
            text-decoration: none;
            font-weight: bold;
        }

        nav a:hover {
            text-decoration: underline;
        }

        /* Judul dan teks */
        h1 {
            color: #333;
            margin-bottom: 20px;
        }

        p {
            color: #555;
            margin-bottom: 20px;
        }

        /* Input dan tombol */
        .input-field {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .button {
            background: #007BFF;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .button:hover {
            background: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <nav>
            <a href="?page=login">Login</a>
            <a href="?page=coba">Coba</a>
            <a href="?page=magang">Magang</a>
        </nav>
        <div class="content">
            <?php
            // Render halaman berdasarkan menu yang dipilih
            echo renderPage($page);
            ?>
        </div>
    </div>
</body>
</html>
