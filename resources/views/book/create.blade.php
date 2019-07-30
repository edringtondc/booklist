@extends('layouts.main')

@section('title', 'Create Book')

@section('content')

    <div class="row">
        <div class="col-sm-12">
            <h1>Create Book</h1>
            {!! Form::open(['route'=> 'book.store', 'method' => 'POST']) !!}
            @component('component.bookForm')
            @endcomponent

            {!! Form::close() !!}
        </div>


    </div>

@endsection