@extends('layouts.app')

@section('content')

    <div class="panel-body">

        @include('common.errors')

        {!! Form::open(['url' => 'tasks', 'class' => 'form-horizontal', 'method'=>'POST']) !!}

            <div class="form-group">
                <label for="task-name" class="col-sm-3 control-label">Task</label>

                <div class="col-sm-6">
                    <input type="text" name="name" id="task-name" class="form-control">
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    {!! Form::button('<i class="fa fa-plus">' . trans("messages.task_add_task") ,['type'=>'submit', 'class' => 'btn btn-default']) !!}
                </div>
            </div>
         {!! Form::close() !!}
    </div>

@endsection
