@extends('layouts.app')
@section('content')
    <header class="jumbotron">
        <div class="container hero">
            <h1>Events</h1>
            <h2>Family fun and exciting nightlife right by the ocean</h2>
        </div>
    </header>


    <section class="custom-container">

        <ol class="breadcrumb">
            <li><a href="home">Home</a></li>
            <li class="active">Events</li>
        </ol>

    <?php

        foreach($events as $event){
            echo '<div class="listing">';
            //echo '<img src="../images/events/' . $event->image . '" class="img-rounded img-responsive img pull-left">';
            echo '<h3>' . $event->eventName . '</h3>';
            echo '<p> Date and Time: ' . $event->datetime . '</p>';
            echo '<p> Phone: ' . $event->eventPhone . '</p>';
            echo '<p> <a href="'. $event->eventWebsite . '" target="_blank">Website</a></p>';
            echo '<p> Description: ' . $event->description . '</p>';
            echo '<a href="/add-to-trip/event/' . $event->id.'"><button>Add to Trip</button></a>';
            echo '</div>';
        }

    ?>

        <p class="back-top"><a href="{{url('#brand')}}">Back to Top</a></p>

    </section>
@endsection
