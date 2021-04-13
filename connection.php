<?php

$mysqli = new mysqli(
    "eu-cdbr-west-01.cleardb.com",
    "b900b8811d8d06",
    "b5f89b7b",
    "eu-cdbr-west-01.cleardb.com"
);

/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}