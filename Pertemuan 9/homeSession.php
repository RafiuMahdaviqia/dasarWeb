<?php
session_start(); // Mulai session
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <?php
    if(isset($_SESSION['status']) && $_SESSION['status'] == 'login'){
        echo "Selamat datang " . $_SESSION['username'];
        ?>
        <br> <a href="sessionLogout.php">Log out</a>
        <?php
    } else {
        echo "Anda belum login. Silakan <a href='sessionLoginForm.html'>login</a> terlebih dahulu.";
    }
    ?>
</body>
</html>
