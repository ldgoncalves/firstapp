@extends('layouts.app')
@section('content')
    <h1>Events</h1>

    <?php

        foreach($events as $event){
            echo '<h2>' . $event->eventName . '</h2>';
            echo '<p> Date and Time: ' . $event->datetime . '</p>';
            echo '<p> Phone: ' . $event->eventPhone . '</p>';
            echo '<p> <a href="'. $event->eventWebsite . '" target="_blank">Website</a></p>';
            echo '<p> Description: ' . $event->description . '</p>';
        }

    ?>
@endsection