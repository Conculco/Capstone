<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="Enterprise solution for Pet Clinics">
    <meta name="author" content="Lovely Pets">
    <title>Lovely Pets | Welcome</title>
    <link rel="icon" href="img/favicon.ico"/>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<style>
    /* Always set the map height explicitly to define the size of the div
     * element that contains the map. */
    #map {
        height: 100%;
        width: 50%;
    }
    /* Optional: Makes the sample page fill the window. */
    html, body {
        height: 100%;
        margin: 0;
        padding: 0;
    }
    p.small {
        line-height: 0.5;
    }

    p.big {
        line-height: 5.0;
    }
</style>
<body>
<?php
include 'header.php';
?>
<h1> Find a Vet </h1>

<font size= "4">

<p class= "big"> Lovely Pets Veterinary aims to be Australia’s leading veterinary group by providing pet owners access to a network of local practices run by local teams of vets, nurses and reception staff.<br/>

<p class= "small"> Lovely Pets Veterinary offers exceptional client and patient care giving you peace of mind that when in our care, your pet will be treated like family.<br/>

    <div id="map"></div>


    <script>

        function initMap() {
            var myLatLng = {lat: -27.45313, lng: 153.0197};

            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 10,
                center: myLatLng
            });

            var marker = new google.maps.Marker({
                position: myLatLng,
                map: map,
                title: 'Hello World!'
            });
        }
    </script>
    <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=############&callback=initMap">
    </script>





<?php
    include 'footer.php';
?>
  </body>
</html>
