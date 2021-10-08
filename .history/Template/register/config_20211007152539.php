<?php
    $conn = mysql_query()("localhost", "root", "", "shoppe");

    if (!$conn) {
        echo "<script>alert('Connection failed.');</script>";
    }
?>