<?php
include('header.php');
?>

<h1>Hotels</h1>

<?php

    foreach($hotels as $hotel) {
        echo '<h2>' . $hotel->hotelName . '</h2>';
        echo '<p> Address: ' . $hotel->hotelAddress . '</p>';
        echo '<p> Phone: ' . $hotel->hotelPhone . '</p>';
        echo '<p> <a href="'. $hotel->hotelWebsite . '" target="_blank">Website</a></p>';
        echo '<p> Description: ' . $hotel->description . '</p>';
    }

?>

<?php
include('footer.php');
?>