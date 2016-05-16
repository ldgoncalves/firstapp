@extends('layouts.app')
@section('content')
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
@endsection
