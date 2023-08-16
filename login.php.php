<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Rest of your code follows...

<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="login">
        <h1 align="center">Login</h1>
        <form action="" method="post" style="text-align:center;">
            <label for="user">Username:</label>
            <input type="text" id="user" name="user" required><br><br>
            
            <label for="pass">Password:</label>
            <input type="password" id="pass" name="pass" required><br><br>
            
            <button type="submit" name="submit">Login</button>
            <span><?php if(isset($invalid)) echo $invalid; ?></span>
        </form>
    </div>
</body>
</html>

<?php
    include 'loginserv.php';
?>

