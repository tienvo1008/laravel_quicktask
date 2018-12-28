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
    @if (count($tasks) > 0)
        <div class="panel panel-default">
            <div class="panel-heading">
                Current Tasks
            </div>

            <div class="panel-body">
                <table class="table table-striped task-table">

                    <!-- Table Headings -->
                    <thead>
                    <th>Task</th>
                    <th>&nbsp;</th>
                    </thead>

                    <!-- Table Body -->
                    <tbody>
                    @foreach ($tasks as $task)
                        <tr>
                            <!-- Task Name -->
                            <td class="table-text">
                                <div>{{ $task->name }}</div>
                            </td>

                            <td>
                                <!-- TODO: Delete Button -->
                                <td>
                                    {!! Form::open(['url' => 'tasks/'. $task->id ]) !!}
                                        {!! method_field('DELETE') !!}

                                        {!! Form::submit(trans("messages.task_delete_task"), ['class' => 'btn btn-danger']) !!}
                                    {!! Form::close() !!}
                                </td>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endif
@endsection
