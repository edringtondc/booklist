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



        <h2>RESULTS</h2>




      
 
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
          
            
            

                {{--  {!! Form::open(['route' => ['books.destroy', $book->id], 'method' => 'DELETE']) !!}
                <a href="{{ route('books.edit', $book->id) }}" class="btn btn-sm btn-primary">Edit</a>
                    <button type="submit" class="btn btn-sm btn-success ">Save</button>
                    <button type="submit" class="btn btn-sm btn-danger ">Delete</button>
                {!! Form::close() !!}  --}}
                
      
            </div>
         </div>
    

         @endforeach
  
  

    </div>


</div>

@endsection