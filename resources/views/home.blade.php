@extends('layouts.app')

@section('content')
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

    <form action="query" method="post">
        {!! csrf_field() !!}

        <input id="query" type="text" name="query" placeholder="Search" required/>
        <input type="submit" name="submit" value="Submit"/>
    </form>

    <?php
        if(isset($result)){
            echo '<h1>Query Results</h1>';

//            'hotels' => $hotels,
//            'restaurants' => $restaurants,
//            'thingsToDo' => $thingsToDo,
//            'events' => $events,
//            'shopping' => $shopping

            $hotels = $result['hotels'];
            echo '<h2>Hotels</h2>';

            foreach($hotels as $hotel) {
                echo '<h2>' . $hotel->hotelName . '</h2>';
                echo '<p> Address: ' . $hotel->hotelAddress . '</p>';
                echo '<p> Phone: ' . $hotel->hotelPhone . '</p>';
                echo '<p> <a href="'. $hotel->hotelWebsite . '" target="_blank">Website</a></p>';
                echo '<p> Description: ' . $hotel->description . '</p>';
            }

            $restaurants = $result['restaurants'];
            echo '<h2>Restaurants</h2>';

            foreach($restaurants as $restaurant) {
                echo '<h2>' . $restaurant->restaurantsName . '</h2>';
                echo '<p> Address: ' . $restaurant->restaurantsAddress . '</p>';
                echo '<p> Phone: ' . $restaurant->restaurantsPhone . '</p>';
                echo '<p> <a href="'. $restaurant->restaurantsWebsite . '" target="_blank">Website</a></p>';
                echo '<p> Description: ' . $restaurant->description . '</p>';
            }

            $thingsToDo = $result['thingsToDo'];
            echo '<h2>Things To Do</h2>';
            foreach($thingsToDo as $thingToDo){
                echo '<h2>' . $thingToDo->thingstodoName . '</h2>';
                echo '<p> Address: ' . $thingToDo->thingstodoAddress . '</p>';
                echo '<p> Phone: ' . $thingToDo->thingstodoPhone . '</p>';
                echo '<p> <a href="'. $thingToDo->thingstodoWebsite . '" target="_blank">Website</a></p>';
                echo '<p> Description: ' . $thingToDo->description . '</p>';

            }

            $events = $result['events'];
            echo '<h2>Events</h2>';

            foreach($events as $event) {
                echo '<h2>' . $event->eventName . '</h2>';
                echo '<p> Date and Time: ' . $event->datetime . '</p>';
                echo '<p> Phone: ' . $event->eventPhone . '</p>';
                echo '<p> <a href="'. $event->eventWebsite . '" target="_blank">Website</a></p>';
                echo '<p> Description: ' . $event->description . '</p>';
            }

            $shopping = $result['shopping'];
            echo '<h2>Shopping</h2>';

            foreach ($shopping as $shopping) {
                echo '<h2>' . $shopping->shoppingName . '</h2>';
                echo '<p> Address: ' . $shopping->shoppingAddress . '</p>';
            }

        }
    ?>

@endsection
