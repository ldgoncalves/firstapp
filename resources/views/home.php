<?php
/**
 * Created by PhpStorm.
 * User: luanagoncalves
 * Date: 5/15/16
 * Time: 2:31 PM
 */
?>


<?php
include('header.php');
?>

<header>
    <h1>Deerfield Beach Application</h1>
    <p>Welcome visitor! Navigate this application to find all your travel needs for your visit at the wonderful City of Deerfield Beach!</p>
</header>

<nav  style="display:block;">
    <a href="/hotel">Hotels</a> |
    <a href="/restaurant">Restaurants</a> |
    <a href="/thingstodo">Things to Do</a> |
    <a href="/events">Events</a> |
    <a href="/shopping">Shopping</a>
</nav>

<?php

foreach($thingsToDo as $thingToDo){
    echo $thingToDo->thingstodoName;
}

?>
<?php
include('footer.php');
?>