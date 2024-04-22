<html>
    <head>
        <title>HTML Injection</title>
    </head>
    <body>
        <script>
            <?php
            $input = $_POST['input'];
            $input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');
            $email = $_POST['$email'];
            if (filter_var($email, FILTER_VALIDATE_EMAIL)){
                
            } else {
                
            }
            ?>
        </script>
        <h2>Form Input Aman</h2>
        <form method="post" action="proses_form.php">
        <label for="nama">Nama:</label>
        <input type="text" name="nama" id="nama" required><br><br>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required><br><br>
        <input type="submit" name="submit" value="submit">
    </form>
    </body>
</html>