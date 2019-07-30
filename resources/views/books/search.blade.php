@extends('layouts.main')

@section('title', 'Search')

@section('content')

    <div class="row">
        <div class="col-sm-12">
            <h1>Search for a Book</h1>
            
            @component('component.searchForm')
            @endcomponent
        </div>


    </div>

@endsection