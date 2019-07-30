
    {{-- name --}}
  
    {{ Form::label('Title', 'Title', ['class' => 'control-label']) }}
    {{ Form::text('Title', null, ['class' => 'form-control form-control-lg', 'placeholder' => 'Title'])}}

    {{-- description --}}
    {{ Form::label('Author', 'Author', ['class' => 'control-label mt-3']) }}
    {{ Form::text('Author', null, ['class' => 'form-control', 'placeholder' => 'Author'])}}

   
    {{ Form::label('hasRead', 'Have your read this?', ['class' => 'control-label mt-3']) }}
    
    {{ Form::label('Yes', 'Yes', ['class' => 'control-label mt-3']) }}
    {{ Form::radio('hasRead', '1' , true) }}
    {{ Form::label('No', 'No', ['class' => 'control-label mt-3']) }}
    {{ Form::radio('hasRead', '0' , false) }}

    

    <div class="row justify-content-center mt-3">
        <div class="col-sm-4">
        <a href="{{ route('books.index') }}" class="btn btn-block btn-secondary">Go Back</a>
        </div>
        <div class="col-sm-4">
            <button class="btn btn-block btn-primary" type="submit">Save Book</button>
        </div>

    </div>


