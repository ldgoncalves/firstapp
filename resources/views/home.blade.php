{{--@extends('layouts.app')--}}

@section('content')
    {{--Header of the page--}}
    @if (Session::has ('status'))
        <h3>{{ Session::get('status') }}</h3>
    @endif
    <header class="jumbotron">
        <div class="container hero">
            <h1>Way more than a day at the beach... </h1>
            <p>Welcome visitor!<br>Navigate this application to plan your trip at the wonderful City of Deerfield Beach!</p>
        </div>
    </header>

    {{--Search bar and query results--}}
    <section class="row custom-container search">
        <div class="col-md-12">
            <form id="custom-search-form" class="form-search form-horizontal pull-right" action="query" method="post">
                <div class="input-append span12">
                    {!! csrf_field() !!}
                    <input id="query" type="text" class="search-query" name="query" placeholder="Search" required/>
                    <button type="submit" class="btn" name="submit"><i class="glyphicon glyphicon-search"></i></button>
                </div>
            </form>
        </div>
    </section>

    <section class="row custom-container">
        <div class="query col-md-12">

            <?php
            if(isset($result)){

                    echo '<h1>Search Results</h1>';
                    $hotels = $result['hotels'];

                    foreach($hotels as $hotel) {
                        echo '<h3>' . $hotel->hotelName . '</h3>';
                        echo '<p> Address: ' . $hotel->hotelAddress . '</p>';
                        echo '<p> Phone: ' . $hotel->hotelPhone . '</p>';
                        echo '<p> <a href="'. $hotel->hotelWebsite . '" target="_blank">Website</a></p>';
                        echo '<p> Description: ' . $hotel->description . '</p>';
                    }

                    $restaurants = $result['restaurants'];

                    foreach($restaurants as $restaurant) {
                        echo '<h3>' . $restaurant->restaurantsName . '</h3>';
                        echo '<p> Address: ' . $restaurant->restaurantsAddress . '</p>';
                        echo '<p> Phone: ' . $restaurant->restaurantsPhone . '</p>';
                        echo '<p> <a href="'. $restaurant->restaurantsWebsite . '" target="_blank">Website</a></p>';
                        echo '<p> Description: ' . $restaurant->description . '</p>';
                    }

                    $thingsToDo = $result['thingstodos'];

                    foreach($thingsToDo as $thingToDo){
                        echo '<h3>' . $thingToDo->name . '</h3>';
                        echo '<p> Address: ' . $thingToDo->address . '</p>';
                        echo '<p> Phone: ' . $thingToDo->phone . '</p>';
                        echo '<p> <a href="'. $thingToDo->website . '" target="_blank">Website</a></p>';
                        echo '<p> Description: ' . $thingToDo->description . '</p>';
                    }

                    $events = $result['events'];

                    foreach($events as $event) {
                        echo '<h3>' . $event->eventName . '</h3>';
                        echo '<p> Date and Time: ' . $event->datetime . '</p>';
                        echo '<p> Phone: ' . $event->eventPhone . '</p>';
                        echo '<p> <a href="'. $event->eventWebsite . '" target="_blank">Website</a></p>';
                        echo '<p> Description: ' . $event->description . '</p>';
                    }

                    $shopping = $result['shopping'];

                    foreach ($shopping as $shopping) {
                        echo '<h3>' . $shopping->shoppingName . '</h3>';
                        echo '<p> Address: ' . $shopping->shoppingAddress . '</p>';
                    }

//                } else {
//                    echo '<h1>Search Results</h1>';
//                    echo '<p>Sorry no results.</p>';
//                }
            }
            ?>


        </div>
    </section>



    <section class=" row custom-container menu">
        <div class="col-sm-6 col-md-4">
            <a href="{{url('/hotel')}}"><div class="thumbnail">
                <img src="{{url('../images/hotel-1330850_640.jpg')}}" alt="Creative Commons CC0, pixabay.com, user:davidlee770924,hotel-1330850">
                <div class="caption">
                    <h3>Where to Stay</h3>
                    <p>Find hotels located in Deerfield Beach</p>
                </div>
            </div></a>
        </div>
        <div class="col-sm-6 col-md-4">
            <a href="{{url('/restaurant')}}"><div class="thumbnail">
                <img src="{{url('../images/restaurant-449952_640.jpg')}}" alt="Creative Commons CC0, pixabay.com, user:neshom,restaurant-449952">
                <div class="caption">
                    <h3>Where to Eat</h3>
                    <p>Find restaurants in Deerfield Beach</p>
                </div>
            </div></a>
        </div>
        <div class="col-sm-6 col-md-4">
            <a href="{{url('/thingstodo')}}"><div class="thumbnail">
                <img src="{{url('../images/surfing-691675_640.jpg')}}" alt="Creative Commons CC0, pixabay.com, user:Unsplash,surfing-691675">
                <div class="caption">
                    <h3>Things to Do</h3>
                    <p>Get out and enjoy the sun</p>
                </div>
            </div></a>
        </div>
        <div class="col-sm-6 col-md-4">
            <a href="{{url('/events')}}"><div class="thumbnail">
                <img src="{{url('../images/cocktails-1149171_640.jpg')}}" alt="Creative Commons CC0, pixabay.com, user:Unsplash,cocktails-1149171">
                <div class="caption">
                    <h3>Events</h3>
                    <p>Entertainment for everyone</p>
                </div>
            </div></a>
        </div>
        <div class="col-sm-6 col-md-4">
            <a href="{{url('/shopping')}}">
                <div class="thumbnail">
                    <img src="{{url('../images/shop-791582_640.jpg')}}" alt="Creative Commons CC0, pixabay.com, user:Unsplash, shop-791582_640.jpg">
                    <div class="caption">
                    <h3>Shopping</h3>
                    <p>Get watch you need and a gift or two</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-sm-6 col-md-4">
            <a href="{{url('/weatherreport')}}"><div class="thumbnail">
                <img src="{{url('../images/ocean-918999_640.jpg')}}" alt="Creative Commons CC0, pixabay.com, user:Unsplash, ocean-918999_640.jpg">
                <div class="caption">
                    <h3>Weather Report</h3>
                    <p>Check today's weather and  surf report</p>
                </div>
            </div></a>
        </div>

    </section>



@endsection
