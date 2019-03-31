@extends('todo.app')
@section('title', 'Home ')
@section('content')
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <ul class="list-group">
            @if($todos != false)
            @foreach ($todos as $todo)

            <li class="list-group-item">
                <span class="pull-left">
                    {{$todo->todo}}
                </span>
                <span class="pull-right">
                    <a class="secondary-content btn-sm ml-5 mr-5 btn-info" href="{{url('/todo/'.$todo->id)}}">
                        View
                    </a>
                    <a class="secondary-content btn-sm ml-5 mr-5 btn-warning" href="{{url('/todo/'.$todo->id).'/edit'}}">
                        Edit
                    </a>
                    <a href="#" class="secondary-content btn-sm ml-5 mr-5 btn-danger" onclick="event.preventDefault(); document.getElementById('delete-form').submit();">
                        Delete
                    </a>
                    <form id="delete-form" action="{{url('/todo/'.$todo->id)}}" method="POST" style="display: none;">
                        {{ method_field('DELETE') }}{{ csrf_field() }}
                    </form>
                </span>
                <div class="clearfix"></div>
            </li>
            @endforeach
            @else
            <li class="list-group-item"> No Todo added yet <a href="{{ url('/todo/create') }}"> click here</a> to add new todo. </li>
            @endif
        </ul>
    </div>
</div>
@endsection 