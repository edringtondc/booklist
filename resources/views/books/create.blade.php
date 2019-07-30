@extends('layouts.main')

@section('title', 'Create Book')

@section('content')

    <div class="row">
        <div class="col-sm-12">
            <h1>Create Book</h1>
            <br/>
            @if(count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>

            </div>
            @endif
            @if(\Session::has('success'))
                <p>{{\Session::get('success')}}</p>
            @endif


            {!! Form::open(['route'=> 'books.store', 'method' => 'POST']) !!}
       
            @component('component.bookForm')
            @endcomponent

            {!! Form::close() !!}
        </div>


    </div>

@endsection