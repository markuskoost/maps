<?php

$mysqli = new mysqli(
    "127.0.0.1:3306",
    "markus",
    "password",
    "test"
);

/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}