@extends('layouts.app')
@section('content')

<h1>Things To Do</h1>

<?php

    foreach($thingsToDo as $thingToDo){
        echo '<h2>' . $thingToDo->thingstodoName . '</h2>';
        echo '<p> Address: ' . $thingToDo->thingstodoAddress . '</p>';
        echo '<p> Phone: ' . $thingToDo->thingstodoPhone . '</p>';
        echo '<p> <a href="'. $thingToDo->thingstodoWebsite . '" target="_blank">Website</a></p>';
        echo '<p> Description: ' . $thingToDo->description . '</p>';

    }

?>
@endsection