<?php
require 'DBinfo.php';

session_start();

$un=$_POST['UN'];
$pwd=$_POST['pwd'];
$role=$_POST['role'];

echo $un.$pwd.$role;


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql="SELECT * FROM user WHERE name = '$un'";

$result=$conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    if ($row["pwd"] === $pwd) {
        session_start();
        $_SESSION['UN'] = $un;
        $_SESSION['role'] = $rl;
        header('Location: select.php');
    } 
    else {
        echo "<script>alert('Incorrect Password! Try Again')</script>";
        echo "<script>location.href='index.php'</script>";
    }
} 
else {
    echo "<script>alert('User Not found! Try Again')</script>";
    echo "<script>location.href='index.php'</script>";
}
?>