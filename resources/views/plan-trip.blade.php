@extends('layouts.app')
@section('content')

    <h1>Plan Your Trip</h1>
    {{--@foreach($planyourtrips as $key => $value)--}}
    {{--<h3>Dates of travel: {{ $value->start_date }} - {{ $value->end_date }}</h3>--}}
    {{--<a href="{{ URL::to('plan-trip/' . $value->id . '/update')}} "><button>Edit</button></a>--}}
    {{--@endforeach--}}

    <?php
    foreach($items as $key => $value) {
        if($key == 'planyourtrip'){
            foreach($value as $planyourtrips){
                echo '<h3>Dates of travel: ' . $planyourtrips->start_date .' - ' . $planyourtrips->end_date .'</h3>';
                echo '<a href="/update-dates/update/' . $planyourtrips->id .'"><button>Edit</button></a>';

            }
        }
        else if($key == 'hotels'){
            foreach($value as $hotel){

                echo '<h3>' . $hotel->hotelName . '</h3>';
                echo '<p> Phone: ' . $hotel->hotelPhone . '</p>';
                echo '<a href="#"><button>More Info</button></a>';
                echo '<a href="/remove-from-trip/hotel/' . $hotel->hotelTripId .'"><button>Remove</button></a>';
            }
        }
        else if($key == 'restaurants'){
            foreach($value as $restaurant){
                echo '<h3>' . $restaurant->restaurantsName . '</h3>';
                echo '<p> Phone: ' . $restaurant->restaurantsPhone . '</p>';
                echo '<a href="#"><button>More Info</button></a>';
                echo '<a href="/remove-from-trip/restaurant/' . $restaurant->restaurantTripId .'"><button>Remove</button></a>';
            }
        }
        else if($key == 'thingsToDos'){
            foreach($value as $thingstodo){
                echo '<h3>' . $thingstodo->name . '</h3>';
                echo '<p> Phone: ' . $thingstodo->phone . '</p>';
                echo '<a href="#"><button>More Info</button></a>';
                echo '<a href="/remove-from-trip/thingstodo/' . $thingstodo->thingstodoTripId .'"><button>Remove</button></a>';
            }
        }
        else if($key == 'events'){
            foreach($value as $event){
                echo '<h3>' . $event->eventName . '</h3>';
                echo '<p> Phone: ' . $event->eventPhone . '</p>';
                echo '<a href="#"><button>More Info</button></a>';
                echo '<a href="/remove-from-trip/event/' . $event->eventTripId .'"><button>Remove</button></a>';
            }
        }
        else if($key == 'shoppings'){
            foreach($value as $shopping){
                echo '<h3>' . $shopping->shoppingName . '</h3>';
                echo '<p> Phone: ' . $shopping->shoppingPhone . '</p>';
                echo '<a href="#"><button>More Info</button></a>';
                echo '<a href="/remove-from-trip/shopping/' . $shopping->shoppingTripId .'"><button>Remove</button></a>';
            }
        }

    }
    ?>

@endsection