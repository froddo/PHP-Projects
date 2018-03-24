@extends('layouts.default')

@section('content')
    <h1 class="text-danger">Create Todo</h1>
    <hr>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <span class="panel-title "><h3 class="text-danger">Fill in form to create new todo</h3></span>
                </div>
                    <div class="panel-body">
                        {!! Form::open(['action' => 'TodosController@store', 'method' => 'POST']) !!}
                        {{ Form::bsText('text') }}
                        {{ Form::bsTextArea('body') }}
                        {{ Form::bsTextDue('due') }}
                        {{ Form::bsSubmit('Submit', ['class' => 'btn btn-primary']) }}
                        {!! Form::close() !!}
                    </div>
            </div>
        </div>
    </div>

@endsection