@extends('layouts.default')

@section('content')
    <a href="/todo/{{$todo->id}}" class="btn btn-default"><span class="glyphicon glyphicon-backward" aria-hidden="true"></span> Go Back</a>
    <h1 class="text-danger">Edit Todo</h1>
    <hr>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <span class="panel-title "><h3 class="text-danger">Edit form to update todo</h3></span>
                </div>
                <div class="panel-body">
                {!! Form::open(['action' => ['TodosController@update', $todo->id], 'method' => 'POST']) !!}
                {{ Form::bsText('text', $todo->text) }}
                {{ Form::bsTextArea('body', $todo->body) }}
                {{ Form::bsText('due', $todo->due) }}
                {{ Form::hidden('_method', 'PUT') }}
                {{ Form::bsSubmit('Submit', ['class' => 'btn btn-primary']) }}
                {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection