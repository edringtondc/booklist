@extends('layouts.main')

@section('title', 'Create Book')

@section('content')

    <div class="row">
        <div class="col-sm-12">
            <h1>Edit Book</h1>
            {!! Form::model($book, ['route'=> ['book.update', $book->id ], 'method' => 'PUT']) !!}
            @component('component.bookForm')
            @endcomponent

            {!! Form::close() !!}
        </div>


    </div>

@endsection