@extends('layouts.app')

@section('content')
  <a href="/" class="btn btn-secondary text-light">Go Back</a>

  <br/><br/>
    <h3><a href="todo/{{$todo->id}}">{{$todo->text}}</a></h3>
    <div class="badge badge-danger">{{$todo->due}}</div>
    <hr/>
    <p>{{$todo->body}}</p>

    <br/></br/>
    <div class="row">
      <div class="col-md-1 col-lg-1">
        <a href="/todo/{{$todo->id}}/edit" class="btn btn-primary">Edit</a>
      </div>
      <div class="col-md-2 col-lg-2">
        {!! Form::open(['action' => ['TodosController@destroy', $todo->id], 'method' => 'DELETE']) !!}
          <div>
            {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
          </div>
        {!! Form::close() !!}
      </div>
    </div>
@endsection
