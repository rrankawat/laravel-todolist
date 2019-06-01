@extends('layouts.app')

@section('content')
  <a href="/" class="btn btn-secondary">Go Back</a>

  <br/><br/>
  <h1>Create Todo</h1>
  {!! Form::open(['action' => 'TodosController@store', 'method' => 'POST']) !!}
    <div class="form-group">
      {{ Form::label('text', 'Text') }}
      {{ Form::text('text', '', ['class' => 'form-control']) }}
    </div>
    <div class="form-group">
      {{ Form::label('body', 'Body') }}
      {{ Form::textarea('body', '', ['class' => 'form-control']) }}
    </div>
    <div class="form-group">
      {{ Form::label('due', 'Due') }}
      {{ Form::text('due', '', ['class' => 'form-control']) }}
    </div>
    <div>
      {{ Form::submit('Submit', ['class' => 'btn btn-primary']) }}
    </div>
  {!! Form::close() !!}
@endsection
