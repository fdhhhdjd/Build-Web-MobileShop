<?php
    $conn = mysqli_connect("localhost", "root", "", "shoppe");

    if (!$conn) {
        echo "<script>alert('Connection failed.');</script>";
    }
?>