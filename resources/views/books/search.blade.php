@extends('layouts.main')

@section('title', 'Search')

@section('content')

    <div class="row">
        <div class="col-sm-12">
            <h1>Search for a Book</h1>
            
            @component('component.searchForm')
            @endcomponent
        </div>
        <div class="container">

            <?php
            $apiKey = env('APIKEY');
            $searchTerm = 'To Kill a Mockingbird';
            $client = new \GuzzleHttp\Client();
            $request = $client->get('https://www.goodreads.com/search/index.xml?key=' . $apiKey . '&q='. $searchTerm);
            $body = $request->getBody();
           
            $xml = new SimpleXMLElement($body);
        
            {{--  foreach($xml ->search->results->work as $work) {
                echo "<h4>" . $work->best_book->title . "</h4>";
                echo "<p>" . $work->best_book->author->name . "</p>";
             };  --}}
        ?>
        </div>


    </div>

@endsection