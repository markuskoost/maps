<?php
require 'connection.php';

$name = mysqli_real_escape_string($mysqli, $_REQUEST['name']);
$lat = mysqli_real_escape_string($mysqli, $_REQUEST['latitude']);
$lng = mysqli_real_escape_string($mysqli, $_REQUEST['longitude']);
$description = mysqli_real_escape_string($mysqli, $_REQUEST['description']);

// Attempt insert query execution
$sql = "INSERT INTO markers(name, lat, lng, description) VALUES ('$name', '$lat', '$lng', '$description')";
if(mysqli_query($mysqli, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($mysqli);
}

// Close connection
mysqli_close($mysqli);