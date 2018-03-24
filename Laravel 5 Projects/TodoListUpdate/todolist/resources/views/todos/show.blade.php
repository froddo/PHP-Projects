@extends('layouts.default')

@section('content')
    <a class="btn btn-default" href="/"><span class="glyphicon glyphicon-backward" aria-hidden="true"></span> Go Back</a>
    <hr>
    <div class="panel panel-danger">
        <div class="panel-heading">
            <div class="panel-title"><h3 class="text-center">{{$todo->text}}</h3> </div>
        </div>
        <div class="panel-footer"><h4 class="text-success">{{$todo->body}}</h4></div>
        <div class="panel-footer"><h4 class="label label-danger">{{$todo->due}}</h4></div>

    </div>
    <div class="progress">
        <div class="progress-bar progress-bar-success active" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
            <span class="sr-only">45% Complete</span>
        </div>
        <div class="progress-bar progress-bar-danger active" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
            <span class="sr-only">45% Complete</span>
        </div>
    </div>
    <a href="/todo/{{$todo->id}}/edit" class="btn btn-success"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Edit</a>
    {!! Form::open(['action' => ['TodosController@destroy', $todo->id], 'method' => 'POST', 'class' => 'pull-right']) !!}
        {{ Form::hidden('_method', 'DELETE') }}
        {{ Form::bsSubmit('Delete', ['class' => 'btn btn-danger']) }}
    {!! Form::close() !!}

@endsection