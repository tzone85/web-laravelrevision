@extends('layouts.app')


@section('content')
    <h1>Home</h1>
    <p><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur autem doloribus et ex fugiat ipsum laboriosam magnam molestias nihil numquam porro provident, quam quod reiciendis repellendus reprehenderit sequi, ut voluptates.</span><span>Aspernatur ducimus eligendi eum excepturi facere fuga iste magnam numquam perspiciatis provident quisquam sit, tempora ut veniam voluptatum? Adipisci animi aperiam assumenda blanditiis ducimus earum, est quo saepe similique voluptatem!</span>
    </p>
@endsection

@section('sidebar')
    @parent
    <p>This is appended to the sidebar</p>
@endsection