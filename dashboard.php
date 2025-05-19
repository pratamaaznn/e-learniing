<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit();
}
$user = $_SESSION['user'];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Siswa</title>
    <style>
        body {
            margin: 0;
            background-color: #dceeff;
            font-family: 'Segoe UI', sans-serif;
            text-align: center;
        }
        .container {
            padding: 30px;
        }
        .profile-pic {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            object-fit: cover;
            margin-top: 20px;
        }
        .logout {
            position: absolute;
            top: 30px;
            right: 50px;
            font-size: 20px;
        }
        .logout a {
            text-decoration: none;
            color: #d22;
        }
        .title {
            font-size: 32px;
            font-weight: bold;
            margin-bottom: 10px;
        }
        .hello {
            font-style: italic;
            margin: 10px;
        }
        .search-box {
            margin: 30px auto;
            width: 300px;
        }
        .search-box input {
            width: 100%;
            padding: 10px;
            border-radius: 8px;
            border: 1px solid #aaa;
            font-size: 14px;
        }
        .cards {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 25px;
            margin-top: 30px;
        }
        .card {
            width: 160px;
            background-color: #fff;
            padding: 10px;
            border-radius: 12px;
            box-shadow: 0 0 8px rgba(0,0,0,0.1);
            text-align: center;
        }
        .card img {
            width: 100%;
            border-radius: 10px;
        }
        .card-title {
            margin-top: 10px;
            font-weight: bold;
        }
    </style>
</head>
<body>

<div class="logout">
    <a href="logout.php" title="Logout">🚪</a>
</div>

<div class="container">
    <div class="title">Beranda</div>
    <img class="profile-pic" src="image/siswa.WEBP" alt="Profile">
    <div class="hello">Hello <?php echo htmlspecialchars($user['nama']); ?></div>
    <hr style="width: 80%; border: 1px solid #555;">

    <div class="search-box">
        <label for="search">Ingin belajar apa hari ini?</label><br>
        <input type="text" id="search" placeholder="Cari mata pelajaran">
    </div>

    <div class="cards">
        <div class="card">
            <img src="image/mtk.jpg" alt="Matematika">
            <div class="card-title">Matematika</div>
        </div>
        <div class="card">
            <img src="image/ppkn.jpeg" alt="PPKN">
            <div class="card-title">Ppkn</div>
        </div>
        <div class="card">
            <img src="image/senbud.webp" alt="Seni Budaya">
            <div class="card-title">Seni Budaya</div>
        </div>
        <div class="card">
            <img src="image/pai.jpg" alt="PAI">
            <div class="card-title">PAI</div>
        </div>
    </div>
</div>

</body>
</html>
