@extends('layouts.app')
@section('content')

    <header class="jumbotron">
        <div class="container hero">
            <h1>More Info</h1>
        </div>
    </header>

    <section class="custom-container">

        <ol class="breadcrumb">
            <li><a href="{{url('home')}}">Home</a></li>
            <li><a href="{{url('hotel')}}">Where to Stay</a></li>
            <li><a href="{{url('restaurant')}}">Where to Eat</a></li>
            <li><a href="{{url('thingstodo')}}">Things to Do</a></li>
            <li><a href="{{url('events')}}">Events</a></li>
            <li><a href="{{url('shopping')}}">Shopping</a></li>
            <li><a href="{{url('plan-trip')}}">Plan Your Trip</a></li>
            <li class="active">More Info</li>
        </ol>

        <?php

        if(isset($hotel)) {
            echo '<div class="container" style=" padding-top: 30px;">';
            echo '<img src="../../images/hotels/' . $hotel->image . '" class="img-rounded img-responsive">';
            echo '<h3>'. $hotel->hotelName .'</h3>';
            echo '<p> Address: '. $hotel->hotelAddress .'</p>';
            echo '<p> Phone: '. $hotel->hotelPhone .'</p>';
            echo'<p><a href="'. $hotel->hotelWebsite .'" target="_blank">Website</a></p>';
            echo '<p> Description: '. $hotel->description .'</p>';
        }

        if(isset($restaurant)) {
            echo '<div class="container" style=" padding-top: 30px;">';
            echo '<img src="../../images/restaurants/' . $restaurant->image . '" class="img-rounded img-responsive">';
            echo '<h3>'. $restaurant->restaurantsName .'</h3>';
            echo '<p> Address: '. $restaurant->restaurantsAddress .'</p>';
            echo '<p> Phone: '. $restaurant->restaurantsPhone .'</p>';
            echo'<p><a href="'. $restaurant->restaurantsWebsite .'" target="_blank">Website</a></p>';
            echo '<p> Description: '. $restaurant->description .'</p>';
        }
        if(isset($thingstodo)) {
            echo '<div class="container" style=" padding-top: 30px;">';
            echo '<img src="../../images/thingstodo/' . $thingstodo->image . '" class="img-rounded img-responsive">';
            echo '<h3>'. $thingstodo->name .'</h3>';
            echo '<p> Address: '. $thingstodo->address .'</p>';
            echo '<p> Phone: '. $thingstodo->phone .'</p>';
            echo'<p><a href="'. $thingstodo->website .'" target="_blank">Website</a></p>';
            echo '<p> Description: '. $thingstodo->description .'</p>';
        }
        if(isset($event)) {
            echo '<div class="container" style=" padding-top: 30px;">';
            echo '<h3>'. $event->eventName .'</h3>';
            echo '<p> Address: '. $event->eventAddress .'</p>';
            echo '<p> Phone: '. $event->eventPhone .'</p>';
            echo'<p><a href="'. $event->eventWebsite .'" target="_blank">Website</a></p>';
            echo '<p> Description: '. $event->description .'</p>';
        }
        if(isset($shopping)) {
            echo '<div class="container" style=" padding-top: 30px;">';
            echo '<h3>'. $shopping->shoppingName .'</h3>';
            echo '<p> Address: '. $shopping->shoppingAddress .'</p>';
        }
        ?>
    </section>


@endsection