@extends('layouts.app')
@section('content')

    <header class="jumbotron">
        <div class="container hero">
            <h1>Things to Do</h1>
            <h2>Endless activities all in one place</h2>
        </div>
    </header>

    <section class="custom-container">

        <ol class="breadcrumb">
            <li><a href="home">Home</a></li>
            <li class="active">Things to Do</li>
        </ol>

        <?php
        foreach($thingstodo as $thingToDo){
            echo '<div class="listing">';
            echo '<img src="../images/thingstodo/' . $thingToDo->image . '" class="img-rounded img-responsive img pull-left">';
            echo '<h3>' . $thingToDo->name . '</h3>';
            echo '<p> Address: ' . $thingToDo->address . '</p>';
            echo '<p> Phone: ' . $thingToDo->phone . '</p>';
            echo '<p> <a href="'. $thingToDo->website . '" target="_blank">Website</a></p>';
            echo '<p> Description: ' . $thingToDo->description . '</p>';
            echo '<a href="/add-to-trip/thingstodo/' . $thingToDo->id.'"><button>Add to Trip</button></a>';
            echo '</div>';
        }
        ?>
    <p class="back-top"><a href="{{url('#brand')}}">Back to Top</a></p>

    </section>
@endsection
