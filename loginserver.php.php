
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Rest of your code follows...

    $invalid = ''; // variable to store message;

    if(isset($_POST['submit'])){
        if(empty($_POST['user']) || empty($_POST['pass'])){
            $invalid = "Incorrect";
        }
        else {
            $user = $_POST['user'];
            $pass = $_POST['pass'];

            $conn = mysqli_connect("localhost", "root", "", "accessform");

            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }

            $query = mysqli_query($conn, "SELECT * FROM form WHERE password='$pass' AND username='$user'"); // table = form

            $rows = mysqli_num_rows($query);

            if($rows == 1){
                header("Location: Login-access.php"); // redirecting to other page
            }
            else {
                $invalid = "Incorrect";
            }

            mysqli_close($conn);
        }
    }
?>


