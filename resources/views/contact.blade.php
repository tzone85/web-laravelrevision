@extends('layouts.app')


@section('content')
    <h1>Contact</h1>

    {!! Form::open(['url' => 'contact/submit']) !!}
        <div class="form-group">

            {{ Form::label('name', 'Name') }}

            {{ Form::text('name','', ['class' => 'form-control', 'placeholder'=>'Enter Name']) }}
        </div>

        <div class="form-group">

            {{ Form::label('email', 'E-Mail Address', ['class' => 'awesome']) }}

            {{ Form::text('email', '') }}
        </div>

        <div class="form-group">

            {{ Form::label('message', 'Message') }}

            {{ Form::textArea('message', '') }}
        </div>

    {!! Form::close() !!}
@endsection