@extends('layouts.app')
@section('content')
<section class="container">
    <h1> <?php echo $weatherReport->current_observation->display_location->full; ?> Weather Report</h1>

    <p><?php echo $weatherReport->current_observation->observation_time; ?></p>

    <p><?php echo $weatherReport->current_observation->weather; ?></p>

    <img src="<?php echo $weatherReport->current_observation->icon_url; ?>">

    <p>Temperature: <?php echo $weatherReport->current_observation->temperature_string; ?></p>

    <p>Feels like: <?php echo $weatherReport->current_observation->feelslike_string; ?></p>

    <p>Precipitation: <?php echo $weatherReport->current_observation->temperature_string; ?></p>

    <p>Relative Humidity: <?php echo $weatherReport->current_observation->relative_humidity; ?></p>

    <p>Wind: <?php echo $weatherReport->current_observation->wind_string . ' | ' . $weatherReport->current_observation->wind_mph . ' mph' ?></p>
    <p>Wind Direction: <?php echo $weatherReport->current_observation->wind_dir ?></p>

</section>
@endsection