<?php
    $conn = mysqli_connect("localhost", "root", "", "login-limits");

    if (!$conn) {
        echo "<script>alert('Connection failed.');</script>";
    }
?>