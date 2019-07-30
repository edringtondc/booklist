@extends('layouts.main')

@section('title', 'Book Home')

@section('content')

    <div class="row justify-content-center mb-3">
        <div class="col-sm-4">
            <a href="{{route('books.create')}}" class="btn btn-block btn-success">Create Book</a>
        </div>
    </div>

    @if($books->count() == 0)
         <p class="lead text-center">There are no books created</p>

    @else
         @foreach($books as $book)

          <div class="row pb-3" style="border-bottom: 1px gray solid">

            <div class="col-sm-12 mt-3">
               <h3 > {{ $book->Title }} </h3>
               <h5> by {{$book->Author}}</h5>
               <hr>
         
                @if ($book->hasRead )
               <p> Read!</p>
                @else
                <p> Not Read!</p>
                @endif
          
            
            

                {!! Form::open(['route' => ['books.destroy', $book->id], 'method' => 'DELETE']) !!}
                <a href="{{ route('books.edit', $book->id) }}" class="btn btn-sm btn-primary">Edit</a>
                    <button type="submit" class="btn btn-sm btn-success ">Save</button>
                    <button type="submit" class="btn btn-sm btn-danger ">Delete</button>
                {!! Form::close() !!}
                
      
            </div>
         </div>
    

         @endforeach
    @endif

    <div class="row justify-content-center">
        <div class="col-sm-6 text-center">
            {{ $books->links()}}
        </div>
    </div>

@endsection