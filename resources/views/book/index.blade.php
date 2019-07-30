@extends('layouts.main')

@section('title', 'Book Home')

@section('content')

    <div class="row justify-content-center mb-3">
        <div class="col-sm-4">
            <a href="{{route('book.create')}}" class="btn btn-block btn-success">Create Task</a>
        </div>
    </div>

    @if($books->count() == 0)
         <p class="lead text-center">There are no books created</p>

    @else
         @foreach($books as $book)

          <div class="row pb-3" style="border-bottom: 1px gray solid">

            <div class="col-sm-12 mt-3">
               <h3 > {{ $book->name }} </h3>
               <small> {{$book->created_at}}</small>
               <hr>
            <p>{{ $book->description}}</p>
            
                <h5> Due Date: {{$book->due_date}} </h5>

                {!! Form::open(['route' => ['book.destroy', $book->id], 'method' => 'DELETE']) !!}
                <a href="{{ route('book.edit', $book->id) }}" class="btn btn-sm btn-primary">Edit</a>

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