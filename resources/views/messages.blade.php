@extends('layouts.app')


@section('content')
    <h1>Messages</h1>

    {{--check to see if there are any messages--}}
    @if(count($messages) > 0)
        @foreach($messages as $message)
            <ul class="list-group">
                <li class="list-group-item">
                    Name: {{ $message->name }}
                </li>

                <li class="list-group-item">
                    Email: {{ $message->email }}
                </li>

                <li class="list-group-item">
                    Messages: {{ $message->message }}
                </li>
            </ul>
        @endforeach
    @endif
@endsection

@section('sidebar')
    @parent
    <p>This is appended to the sidebar</p>
@endsection