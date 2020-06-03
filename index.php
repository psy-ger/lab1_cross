<?php
session_start();
?>

<!doctype html>
<html lanf="en">
<head>
    <meta charset="UTF-8">
    <title>Lab2</title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>

    <form action="login.php" method="post" enctype="multipart/form-data">
        <label>Login</label>
        <input type="text" name="login">
        <label>Password</label>
        <input type="password" name="password">
        <button type="submit">Submit</button>
        <?php
        if (isset($_SESSION['msg'])) {
            echo '<div>' . $_SESSION['msg'] . '</div>';
            unset($_SESSION['msg']);
        }
        ?>
    </form>
</body>
</html>