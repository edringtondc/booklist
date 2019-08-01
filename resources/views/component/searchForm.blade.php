<div class="container">

    {{-- name --}}
  
    {{ Form::label('Search', 'Search', ['class' => 'control-label']) }}
    {{ Form::text('Search', null, ['class' => 'form-control form-control-lg', 'placeholder' => 'Search'])}}


    

    <div class="row justify-content-center mt-3">
        <div class="col-sm-4">
        <a href="{{ route('books.index') }}" class="btn btn-block btn-secondary">Go Back</a>
        </div>
        <div class="col-sm-4">
            <button class="btn btn-block btn-primary" type="submit">Search</button>
        </div>

    </div>




</div>


