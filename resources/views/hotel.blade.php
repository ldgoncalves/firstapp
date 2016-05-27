@extends('layouts.app')

@section('content')

    <header class="jumbotron">
        <div class="container hero">
            <h1>Where to Stay</h1>
            <h2>Deerfield Beach Hotels</h2>
        </div>
    </header>

    <section class="custom-container">

        <ol class="breadcrumb">
            <li><a href="home">Home</a></li>
            <li class="active">Where to Stay</li>
        </ol>

        <?php
        foreach($hotels as $hotel) {
            echo '<div class="listing">';
            echo '<img src="../images/hotels/' . $hotel->image . '" class="img-rounded img-responsive img pull-left">';
            echo '<h3>' . $hotel->hotelName . '</h3>';
            echo '<p> Address: ' . $hotel->hotelAddress . '</p>';
            echo '<p> Phone: ' . $hotel->hotelPhone . '</p>';
            echo '<p> <a href="'. $hotel->hotelWebsite . '" target="_blank">Website</a></p>';
            echo '<p> Description: ' . $hotel->description . '</p>';
            echo '<a href="/add-to-trip/hotel/' . $hotel->id.'"><button>Add to Trip</button></a>';
            echo '</div>';
        }

        ?>

        <p class="back-top"><a href="{{url('#brand')}}">Back to Top</a></p>

    </section>

@endsection
