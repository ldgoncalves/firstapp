@extends('layouts.app')
@section('content')
    <header class="jumbotron">
        <div class="container hero">
            <h1>Shopping</h1>
            <h2>Take home something memorable</h2>
        </div>
    </header>
    <section class="custom-container">

        <?php

        foreach ($shoppings as $shop) {
            echo '<div class="listing">';
            //    echo '<img src="../images/shopping/' . $shop->image . '" class="img-rounded img-responsive img pull-left">';
            echo '<h3>' . $shop->shoppingName . '</h3>';
            echo '<p> Address: ' . $shop->shoppingAddress . '</p>';
            //    echo '<p> Phone: ' . $shop->shoppingPhone . '</p>';
            //    echo '<p> <a href="' . $shop->shoppingWebsite . '" target="_blank">Website</a></p>';
            //    echo '<p> Description: ' . $shop->description . '</p>';
            echo '<button><a href="/add-to-trip/shopping/' . $shop->id.'">Add to Trip</a></button>';
            echo '</div>';
        }
        ?>

            <p class="back-top"><a href="#app-layout">Back to Top</a></p>

    </section>
@endsection








