@extends('layouts.app')
@section('content')

    <header class="jumbotron">
        <div class="container hero">
            <h1>Things to Do</h1>
            <h2>Endless activities all in one place</h2>
        </div>
    </header>

    <section class="custom-container">
        <?php
        foreach($thingstodo as $thingToDo){
            echo '<div class="listing">';
            echo '<img src="../images/thingstodo/' . $thingToDo->image . '" class="img-rounded img-responsive img pull-left">';
            echo '<h3>' . $thingToDo->name . '</h3>';
            echo '<p> Address: ' . $thingToDo->address . '</p>';
            echo '<p> Phone: ' . $thingToDo->phone . '</p>';
            echo '<p> <a href="'. $thingToDo->website . '" target="_blank">Website</a></p>';
            echo '<p> Description: ' . $thingToDo->description . '</p>';
            echo '<button><a href="/add-to-trip/thingstodo/' . $thingToDo->id.'">Add to Trip</a></button>';
            echo '</div>';
        }
        ?>
    <p class="back-top"><a href="#app-layout">Back to Top</a></p>

    </section>
@endsection
