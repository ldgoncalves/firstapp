<?php
/**
 * Created by PhpStorm.
 * User: luanagoncalves
 * Date: 5/15/16
 * Time: 3:02 PM
 */
?>

<?php
include('header.php');
?>

    <h1>Restaurants</h1>
<?php
foreach($restaurants as $restaurant) {
    echo '<h2>' . $restaurant->restaurantsName . '</h2>';
    echo '<p> Address: ' . $restaurant->restaurantsAddress . '</p>';
    echo '<p> Phone: ' . $restaurant->restaurantsPhone . '</p>';
    echo '<p> <a href="'. $restaurant->restaurantsWebsite . '" target="_blank">Website</a></p>';
    echo '<p> Description: ' . $restaurant->description . '</p>';
}
?>


<?php
include('footer.php');
?>