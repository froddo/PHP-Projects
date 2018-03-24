@extends('layouts.default')

@section('content')
<h1 class="text-danger">Todos</h1>
<hr>
@if(count($todos) > 0)
    @foreach($todos as $todo)
        <div class="panel panel-warning">
            <div class="panel-heading">
                <div class="panel-title"><h3 class="text-center">{{$todo->text}}</h3></div>
            </div>

            <h3 class="panel-footer"><span class="label label-danger">{{$todo->due}}</span></h3>

            <div class="panel-footer"><a href="/todo/{{$todo->id}}" class="btn btn-primary">More <span class="glyphicon glyphicon-send" aria-hidden="true"></span></a></div>
            <div class="panel-footer"><h4><span class="label label-warning">Created: {{$todo->created_at}}</span></h4></div>
        </div>
    @endforeach
    {{ $todos->links() }}
@endif

@endsection