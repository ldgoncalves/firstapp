@extends('layouts.app')
@section('content')
    <h1>Shopping</h1>
<?php

    foreach ($shoppings as $shop) {
        echo '<h2>' . $shop->shoppingName . '</h2>';
        echo '<p> Address: ' . $shop->shoppingAddress . '</p>';
    //    echo '<p> Phone: ' . $shop->eventPhone . '</p>';
    //    echo '<p> <a href="' . $shop->eventWebsite . '" target="_blank">Website</a></p>';
    //    echo '<p> Description: ' . $shop->description . '</p>';

    }

?>
@endsection