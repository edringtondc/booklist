@extends('layouts.main')

@section('title', 'Search')

@section('content')

<div class="row">
    <div class="col-sm-12">
        <h1>Search for a Book</h1>
        {!! Form::open(['route'=> 'books.search', 'method' => 'GET' ]) !!}

        @component('component.searchForm')
        @endcomponent

        {!! Form::close() !!}
    </div>

    <div class="container">



        <h2>RESULTS</h2>




      
        @if($results)
         @foreach($results as $book)

          <div class="row pb-3" style="border-bottom: 1px gray solid">

            <div class="col-sm-12 mt-3">
               <h3 > {{ $book['Title'] }} </h3>
               <h5> by {{ $book['Author']}}</h5>
               <hr>
         
                {{--  @if ($book->hasRead )
               <p> Read!</p>
                @else
                <p> Not Read!</p>
                @endif  --}}
          
{{--             
            

                 {!! Form::open(['route' => ['books.store', $book->id], 'method' => 'POST']) !!}
                    <button type="submit" class="btn btn-sm btn-success ">Save</button>
                {!! Form::close() !!}  --}}
                
      
            </div>
         </div>
    

         @endforeach
         @else 
            <div class="col-sm-12">
                <p>There are no results</p>
            </div>

        @endif
  
  

    </div>


</div>

@endsection