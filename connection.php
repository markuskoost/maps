<?php
//$servername = "d82729.mysql.zonevs.eu";
//$username = "d82729sa337621";
//$password = "mapsmaps123";
//$dbname = "d82729_maps";
//
//try {
//    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
//    // set the PDO error mode to exception
//    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//
////    $referer = $_SERVER['HTTP_REFERER'];
////    header("Location: $referer");
//
//    echo "Connected successfully";
//}
//catch(PDOException $e)
//{
//    echo "Connection failed: " . $e->getMessage();
//}
$mysqli = new mysqli(
    "x",
    "x",
    "x",
    "x"
);

/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

//$referer = $_SERVER['HTTP_REFERER'];
//header("Location: $referer");
//header("Content-type: text/xml");