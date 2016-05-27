@extends('layouts.app')
@section('content')

    <header class="jumbotron">
        <div class="container hero">
            <h1>Plan Your Trip</h1>
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
            <li class="active">Plan Your Trip</li>
        </ol>


    <?php
    foreach($items as $key => $value) {
        if($key == 'planyourtrip'){
            foreach($value as $planyourtrips){
                echo '<div class="triplist">';
                if(($planyourtrips->start_date==null) and ($planyourtrips->end_date==null) ){
                    echo '<h2>Dates of Travel:<br><span> ' . $planyourtrips->start_date . $planyourtrips->end_date .'</span></h2>';
                    echo '<a href="/update-dates/update/' . $planyourtrips->id .'"><button class="btn btn-success center-block">Edit</button></a>';
                }
                else
                    {
                        echo '<h2>Dates of Travel<br><span> ' . date('m-d-Y', strtotime($planyourtrips->start_date)) .' - ' . date('m-d-Y', strtotime($planyourtrips->end_date)) .'</span></h2>';
                        echo '<a href="/update-dates/update/' . $planyourtrips->id .'"><button class="btn btn-success center-block ">Edit</button></a>';
                    }
                echo '</div>';
            }
        }
        else if($key == 'hotels'){
            foreach($value as $hotel){
                echo '<div class="triplist">';
                echo '<h3>' . $hotel->hotelName . '</h3>';
                echo '<p> Phone: ' . $hotel->hotelPhone . '</p>';
                echo '<a href="/moreinfo-from-trip/hotel/' . $hotel->id .'"><button class="btn btn-info ">More Info</button></a>';
                echo '<a href="/remove-from-trip/hotel/' . $hotel->hotelTripId .'"><button class="btn btn-danger confirm-link">Remove</button></a>';
                echo '</div>';
            }
        }
        else if($key == 'restaurants'){
            foreach($value as $restaurant){
                echo '<div class="triplist">';
                echo '<h3>' . $restaurant->restaurantsName . '</h3>';
                echo '<p> Phone: ' . $restaurant->restaurantsPhone . '</p>';
                echo '<a href="/moreinfo-from-trip/restaurant/' . $restaurant->id .'"><button class="btn btn-info">More Info</button></a>';
                echo '<a href="/remove-from-trip/restaurant/' . $restaurant->restaurantTripId .'"><button class="btn btn-danger confirm-link">Remove</button></a>';
                echo '</div>';
            }
        }
        else if($key == 'thingsToDos'){
            foreach($value as $thingstodo){
                echo '<div class="triplist">';
                echo '<h3>' . $thingstodo->name . '</h3>';
                echo '<p> Phone: ' . $thingstodo->phone . '</p>';
                echo '<a href="/moreinfo-from-trip/thingstodo/' . $thingstodo->id .'"><button class="btn btn-info">More Info</button></a>';
                echo '<a href="/remove-from-trip/thingstodo/' . $thingstodo->thingstodoTripId .'"><button class="btn btn-danger confirm-link">Remove</button></a>';
                echo '</div>';
            }
        }
        else if($key == 'events'){
            foreach($value as $event){
                echo '<div class="triplist">';
                echo '<h3>' . $event->eventName . '</h3>';
                echo '<p> Phone: ' . $event->eventPhone . '</p>';
                echo '<a href="/moreinfo-from-trip/event/' . $event->id .'"><button class="btn btn-info">More Info</button></a>';
                echo '<a href="/remove-from-trip/event/' . $event->eventTripId .'"><button class="btn btn-danger confirm-link">Remove</button></a>';
                echo '</div>';
            }
        }
        else if($key == 'shoppings'){
            foreach($value as $shopping){
                echo '<div class="triplist">';
                echo '<h3>' . $shopping->shoppingName . '</h3>';
                echo '<p> Address: ' . $shopping->shoppingAddress . '</p>';
                echo '<a href="/moreinfo-from-trip/shopping/' . $shopping->id .'"><button class="btn btn-info">More Info</button></a>';
                echo '<a href="/remove-from-trip/shopping/' . $shopping->shoppingTripId .'"><button class="btn btn-danger confirm-link">Remove</button></a>';
                echo '</div>';
            }
        }

    }

    ?>
    </section>
    <!-- Confirmation Dialog once user hits button to delete -->

    <div class='delete' title="Confirmation Required">Are you sure you want to remove this item?</div>

    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5747853cd8e286a9"></script>


@endsection
