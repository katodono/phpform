<?php

$conn = mysqli_connect("localhost", "phpmyadmin", "anup123", "phpform");

if (!$conn) {
    echo "Connection Failed";
}