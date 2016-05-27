@extends('layouts.app')
@section('content')
    <header class="jumbotron">
        <div class="container hero">
            <h1>Where to Eat</h1>
            <h2>Deerfield Beach Restaurants</h2>
        </div>
    </header>

    <section class="custom-container">

        <ol class="breadcrumb">
            <li><a href="home">Home</a></li>
            <li class="active">Where to Eat</li>
        </ol>

        <?php
        foreach($restaurants as $restaurant) {
            echo '<div class="listing">';
            echo '<img src="../images/restaurants/' . $restaurant->image . '" class="img-rounded img-responsive img pull-left">';
            echo '<h3>' . $restaurant->restaurantsName . '</h3>';
            echo '<p> Address: ' . $restaurant->restaurantsAddress . '</p>';
            echo '<p> Phone: ' . $restaurant->restaurantsPhone . '</p>';
            echo '<p> <a href="'. $restaurant->restaurantsWebsite . '" target="_blank">Website</a></p>';
            echo '<p> Description: ' . $restaurant->description . '</p>';
            echo '<a href="/add-to-trip/restaurant/' . $restaurant->id.'"><button>Add to Trip</button></a>';
            echo '</div>';
        }
        ?>
            <p class="back-top"><a href="{{url('#brand')}}">Back to Top</a></p>
    </section>


@endsection







