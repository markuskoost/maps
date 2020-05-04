<?php
if(isset($_POST['deleteItem']) and is_numeric($_POST['deleteItem'])) {
    // here comes your delete query: use $_POST['deleteItem'] as your id
    // $delete = $_POST['deleteItem']
    // $sql = "DELETE FROM `tablename` where `id` = '$delete'";

}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Simple Map</title>
    <meta name="viewport" content="initial-scale=1.0">
    <meta charset="utf-8">
    <style>
        /* Always set the map height explicitly to define the size of the div
         * element that contains the map. */
        #map {
            height: 100%;
        }

        /* Optional: Makes the sample page fill the window. */
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
        }
    </style>
</head>
<body>
<form action="save-form.php" method="post">
    <input name="name" placeholder="Add name"><br>
    <input name="latitude" id="lat" placeholder="Add latitude"><br>
    <input name="longitude" id="lng" placeholder="Add latitude"><br>
    <textarea name="description" placeholder="Add description"></textarea><br>
    <button name="action" value="save">Save</button>
</form>
<div id="map"></div>
<script>
    var map;

    function createMarker(data) {

        console.log(data);

        // var content = '<div id="content">'+
        //     '<div id="siteNotice">'+
        //     '</div>'+
        //     '<div id="bodyContent">'+
        //     '<p>'+ data.description +'</p>'+
        //     '<button type="button">Click Me!</button>' +
        //     '</div>'+
        //     '</div>';

        var content = '<form action="" method="post">' +
            '<p>' + data.description + '</p><br>' +
            '<input type="submit" name="deleteMarker">' +
            '</form>';


        var infowindow = new google.maps.InfoWindow({
            content: content
        });

        var marker = new google.maps.Marker({
            position: data,
            map: map,
            title: 'Test3232'
        });

        marker.addListener('click', function() {
            infowindow.open(map, marker);
            map.setZoom(20);
            map.setCenter(marker.getPosition());
        });
    }

    function initMap() {

        fetch('get-markers.php')
            .then(function(response){
                return response.json();
            })
            .then(function(data) {
                for (k in data) {
                    console.log(data[k]);
                    createMarker(data[k]);
                }
            })
            .catch(function(err) {
                console.log('Fetch Error :-S', err);
            });

        var start = {lat: 58.232693, lng: 22.503854};

        map = new google.maps.Map(document.getElementById('map'), {
            center: start,
            zoom: 8
        });

    }
</script>
<script src="https://maps.googleapis.com/maps/api/js?callback=initMap"
        async defer></script>
</body>
</html>