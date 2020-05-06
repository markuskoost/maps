<?php
require 'connection.php';

$id = $_POST['id'];
$lat = $_POST['latitude'];
$lng = $_POST['longitude'];

if (isset($_POST['delete']) && $_POST['delete'] == 'delete') {
    $delete = "DELETE FROM markers WHERE id = '$id'";

    if ($mysqli->query($delete) === TRUE) {
        $referer = $_SERVER['HTTP_REFERER'];
        header("Location: $referer");
    } else {
        echo "Error deleting record: " . $mysqli->error;
    }
} elseif (isset($_POST['update']) && $_POST['update'] == 'update') {
    $update = "UPDATE markers SET lat = '$lat', lng = '$lng' WHERE id = '$id' ";

    if ($mysqli->query($update) === TRUE) {
        $referer = $_SERVER['HTTP_REFERER'];
        header("Location: $referer");
    } else {
        echo "Error updating record: " . $mysqli->error;
    }
}