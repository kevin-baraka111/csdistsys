<?php

$conn = mysqli_connect(
    "localhost",
    "root",
    "",
    "csdistsys"
);

if (!$conn) {
    die("Database connection failed!");
}

?>