
    {{-- name --}}
    {{ Form::label('name', 'Book Name', ['class' => 'control-label']) }}
    {{ Form::text('name', null, ['class' => 'form-control form-control-lg', 'placeholder' => 'Book Name'])}}

    {{-- description --}}
    {{ Form::label('description', 'Book Description', ['class' => 'control-label mt-3']) }}
    {{ Form::textarea('description', null, ['class' => 'form-control', 'placeholder' => 'Book Description'])}}

    {{ Form::label('due_date', 'Due Date', ['class' => 'control-label mt-3']) }}
    {{ Form::date('due_date', null, ['class' => 'form-control'] ) }}

    <div class="row justify-content-center mt-3">
        <div class="col-sm-4">
        <a href="{{ route('book.index') }}" class="btn btn-block btn-secondary">Go Back</a>
        </div>
        <div class="col-sm-4">
            <button class="btn btn-block btn-primary" type="submit">Save Book</button>
        </div>

    </div>


