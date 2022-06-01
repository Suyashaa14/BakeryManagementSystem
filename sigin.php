<?php
include('./connection.php');
// insert query
if(isset($_POST['submit'])){
$username = mysqli_real_escape_string($conn, $_POST["susername"]);
$email = mysqli_real_escape_string($conn,$_POST["semail"]); 
$password = mysqli_real_escape_string($conn,$_POST["spassword"]);
$repassword = mysqli_real_escape_string($conn,$_POST["srepassword"]);
// encrypt password
$pass = password_hash($password, PASSWORD_BCRYPT);
$repass = password_hash($repassword, PASSWORD_BCRYPT);

$usernamequery = "SELECT * FROM signup where username='$username'";
$query = mysqli_query($conn, $usernamequery);

$usernamecount = mysqli_num_rows($query);

if($usernamecount>0){
    echo "username already exists";
}else{
    if($password === $repassword){
        $insertquery = "INSERT INTO signup(username, email, pass, repass)
        VALUES ('$username','$email','$pass','$repass')";
        $iquery = mysqli_query($conn, $insertquery);
        if($iquery){
            ?>
            <script>
                alert("Connection Successful");
                location.replace("login-signup.php");
            </script>
            <?php
        } else{
            ?>
            <script>
                alert ("No Connection");
            </script>
            <?php
        }

    }else{
        echo "password are not matching";
    }
}
}
?>