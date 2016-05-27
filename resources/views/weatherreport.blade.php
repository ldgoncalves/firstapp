@extends('layouts.app')
@section('content')
    <header class="jumbotron">
        <div class="container hero">
            <h1> <?php echo $weatherReport->current_observation->display_location->full; ?></h1> <h2>Weather Report</h2>
        </div>
    </header>

    <section class="custom-container" style="padding-top: 30px;">
        <div style=" text-align: center;">

    <p><?php echo $weatherReport->current_observation->observation_time; ?></p>

    <p><?php echo $weatherReport->current_observation->weather; ?></p>

    <img src="<?php echo $weatherReport->current_observation->icon_url; ?>">

    <p>Temperature: <?php echo $weatherReport->current_observation->temperature_string; ?></p>

    <p>Feels like: <?php echo $weatherReport->current_observation->feelslike_string; ?></p>

    <p>Precipitation: <?php echo $weatherReport->current_observation->precip_today_string; ?></p>

    <p>Relative Humidity: <?php echo $weatherReport->current_observation->relative_humidity; ?></p>

    <p>Wind: <?php echo $weatherReport->current_observation->wind_string ?></p>
        </div>

</section>
@endsection