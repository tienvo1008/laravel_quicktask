<!DOCTYPE html>
<html lang="en">
    <head>
        <title>@lang('messages.app_title')</title>
        {!! Html::style('/css/app.css') !!}
    </head>

    <body>
        <div class="container">
            <nav class="navbar navbar-default">

            </nav>
        </div>

        @yield('content')
    </body>
</html>
