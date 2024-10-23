<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Keamanan Data</title>
    <link rel="stylesheet" href="login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
<?php
include 'header.php';
?>
    <form method="POST" action="cek_login.php">
        <div class="login">
            <ul>
                <li><label for="username">Username</label></li>
                <li><input type="text" placeholder="Masukkan Username" name="username" required></li>
            </ul>
            <ul>
                <li><label for="password">Password</label></li>
                <li><input type="password" placeholder="Masukkan Password" name="password" required></li>
            </ul>
            <ul>
                <input type="submit" value="Login" name="login" class="butLog">
            </ul>
        </div>
    </form>
</div>
</body>

</html>