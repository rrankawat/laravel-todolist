@extends('layouts.app')

@section('content')
  <a href="/todo/{{$todo->id}}" class="btn btn-secondary">Go Back</a>

  <br/><br/>
  <h1>Create Todo</h1>
  {!! Form::open(['action' => ['TodosController@update', $todo->id], 'method' => 'PUT']) !!}
    <div class="form-group">
      {{ Form::label('text', 'Text') }}
      {{ Form::text('text', $todo->text, ['class' => 'form-control']) }}
    </div>
    <div class="form-group">
      {{ Form::label('body', 'Body') }}
      {{ Form::textarea('body', $todo->body, ['class' => 'form-control']) }}
    </div>
    <div class="form-group">
      {{ Form::label('due', 'Due') }}
      {{ Form::text('due', $todo->due, ['class' => 'form-control']) }}
    </div>
    <div>
      {{ Form::submit('Submit', ['class' => 'btn btn-primary']) }}
    </div>
  {!! Form::close() !!}
@endsection
