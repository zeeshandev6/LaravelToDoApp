@extends('todo.app')
@section('title', title_case($todo->todo))
@section('content')
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3>
                    {{title_case($todo->todo)}}
                    <a href="{{url('/todo/'.$todo->id).'/edit'}}" class="btn btn-warning btn-group-sm pull-right ">Edit</a>
                </h3>
            </div>
            <div class="panel-body">
                {{$todo->description}}
            </div>
            <div class="panel-footer"><strong>Category:</strong> {{$todo->category}}</div>
        </div>

    </div>
</div>
@endsection 