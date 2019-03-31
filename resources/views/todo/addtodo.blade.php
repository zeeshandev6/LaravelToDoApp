@extends('todo.app')

@section('title', 'Add New Todo')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-body">
                    <form class="form-horizontal" method="post" action="{{url('/todo')}}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group row">
                            <label for="todo" class="col-sm-2 control-label">Todo</label>
                            <div class="col-md-5">
                                <input type="text" class="form-control" id="todo" name="todo" placeholder="todo" value="{{ old('todo') }}">
                                @if ($errors->has('todo'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('todo') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="category" class="col-sm-2 control-label">Category</label>
                            <div class="col-md-5">
                                <input type="text" class="form-control" id="category" name="category" placeholder="category" value="{{ old('category') }}">
                                @if ($errors->has('category'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('category') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="category" class="col-sm-2 control-label">Description</label>
                            <div class="col-md-5">
                                <textarea class="form-control" id="description" name="description" placeholder="category" value="{{ old('description') }}"></textarea>
                                @if ($errors->has('description'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('description') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-offset-2 col-md-5">
                                <button type="submit" class="btn btn-default">Add</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 