<?php 
$db = mysqli_connect('localhost','root','', 'cms') or Die("Error connecting to database.");

if (empty($_POST['uname']) || empty($_POST['pswd'])) {
    $error = "Username or password invalid.";
    echo($error);
} else {
    $username = mysqli_real_escape_string($db, $_POST['uname']);
    $password = md5(mysqli_real_escape_string($db, $_POST['pswd']));
    echo ($password);
    $query = "SELECT * FROM user WHERE user_username='$username' || user_email='$username';";
    $connection = mysqli_query($db, $query);
    if(mysqli_num_rows($connection) > 0) {
        $row = mysqli_fetch_array($connection);
        if($password == $row['user_password']) {
        SESSION_START();
        $_SESSION['login_user'] = "1";
        $_SESSION['userid'] = $row['user_id'];
        $_SESSION['firstname'] = $row['user_firstname'];
        $error = "Success!";
        header("location: ../templates/home.php");
        } else {
            $error = "Username or password incorrect.";
            header("location: ../index.php");
        }
    }
}
?>