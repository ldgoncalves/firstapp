@extends('layouts.app')
@section('content')


{{--<form>--}}
    {{--Dates of travel:--}}
    {{--<input type="date" name="start-date"> ---}}
    {{--<input type="date" name="end-date">--}}
    {{--<input type="submit">--}}
{{--</form>--}}

<h1>Dates of Travel</h1>

<p>Update your dates of travel</p>

{{--{{ HTML::ul($errors->all()) }}--}}

{{--<form class="form-horizontal" role="form" method="POST" action="{{ url('/update-dates/update/' . $planyourtrip->id) }}">--}}
    {{--{!! csrf_field() !!}--}}


{{--</form>--}}

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



@endsection