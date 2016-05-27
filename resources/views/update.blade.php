@extends('layouts.app')
@section('content')

    <header class="jumbotron">
        <div class="container hero">
            <h1>Dates of Travel</h1>
            <p>Update your dates of travel</p>
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
            <li><a href="{{url('plan-trip')}}">Plan Your Trip</a></li>
            <li class="active">Update Dates</li>
        </ol>
        <div class="container" style="width:50%; padding-top: 30px;">

        {{ Form::open(array('url' => '/update-dates/update/' . $planyourtrip->id, 'method' => 'PUT')) }}

        <div class="form-group">
            {{ Form::label('start_date', 'Start Date') }}
            {{ Form::text('start_date', $planyourtrip->start_date, array('class' => 'form-control tripdatepicker' )) }}
        </div>

        <div class="form-group">
            {{ Form::label('end_date', 'End Date') }}
            {{ Form::text('end_date', $planyourtrip->end_date, array('class' => 'form-control tripdatepicker')) }}
        </div>

        {{ Form::submit('Update', array('class' => 'btn btn-primary')) }}

        {{ Form::close() }}

        </div>


</section>
@endsection