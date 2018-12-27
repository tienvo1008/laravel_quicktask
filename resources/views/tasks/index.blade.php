@extends('layouts.app')

@section('content')

    <div class="panel-body">
    @include('common.errors')

        {!! Form::open(['routes' => 'tasks', 'class' => 'form-horizontal', 'method'=>'POST']) !!}

            <div class="form-group">
                {!! Form::label('task', 'Task', ['class' => 'col-sm-3 control-label'] ) !!}

                <div class="col-sm-6">
                    {!! Form::text('name', $value = null, ['id' => 'task-name', 'class' => 'form-control']) !!}
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    {!! Form::submit(trans("messages.task_add_task") ,['class' => 'btn btn-default']) !!}
                </div>
            </div>
        {!! Form::close() !!}
    </div>

    <!-- TODO: Current Tasks -->

@endsection
