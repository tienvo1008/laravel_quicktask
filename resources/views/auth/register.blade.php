@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">@lang('login.register')</div>

                <div class="card-body">
                    {!! Form::open(['method'=>'POST', 'routes'=>'register']) !!}

                        <div class="form-group row">
                            {!! Form::label('name', trans('login.name'), ['class' => 'col-md-4 col-form-label text-md-right'] ) !!}

                            <div class="col-md-6">
                                {!! Form::text('name', old('name'), ['class' => "form-control ", 'id' => 'name']) !!}

                                @include('common.errors')
                            </div>
                        </div>

                        <div class="form-group row">
                            {!! Form::label('email', trans('login.email'), ['class' => 'col-md-4 col-form-label text-md-right'] ) !!}

                            <div class="col-md-6">
                                {!! Form::email('email', old('email'), ['class' => "form-control ", 'id' => 'email']) !!}

                                @include('common.errors')
                            </div>
                        </div>

                        <div class="form-group row">
                            {!! Form::label('password', trans('login.password'), ['class' => 'col-md-4 col-form-label text-md-right'] ) !!}

                            <div class="col-md-6">
                                {!! Form::password('password', ['class' => "form-control ", 'id' => 'password']) !!}

                                @include('common.errors')

                            </div>
                        </div>

                        <div class="form-group row">
                            {!! Form::label('password-confirm', trans('login.confirm'), ['class' => 'col-md-4 col-form-label text-md-right']) !!}

                            <div class="col-md-6">
                                {!! Form::password('password_confirmation', ['class' => "form-control ", 'id' => 'password-confirm']) !!}
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                {!! Form::submit(trans('login.register'), ['class' => 'btn btn-primary']) !!}
                            </div>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
