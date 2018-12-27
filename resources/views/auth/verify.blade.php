@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">@lang('login.verify_your_email_address')</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            @lang('login.a_fresh')
                        </div>
                    @endif

                    @lang('login.before')
                    @lang('login.receive'), <a href="{{ route('verification.resend') }}">@lang('login.click')</a>.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
