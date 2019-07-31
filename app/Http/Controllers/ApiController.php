<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class ApiController extends Controller
{
    public function getGoogleBooksRequest()
    {
        $apiKey = env('APIKEY');
        $searchTerm = 'To Kill a Mockingbird';
        $client = new \GuzzleHttp\Client();
        $request = $client->get('https://www.goodreads.com/search/index.xml?key=' . $apiKey . '&q='. $searchTerm);
        $body = $request->getBody();
       
        $xml = new SimpleXMLElement($body);
    
         foreach($xml ->search->results->work as $work) {
            echo "<h4>" . $work->best_book->title . "</h4>";
            echo "<p>" . $work->best_book->author->name . "</p>";
         };  




    }
}