<?php

$mysqli = new mysqli(
    "localhost:3306",
    "markus",
    "password",
    "test"
);

/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}