<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <title>{{ config('app.name') }}</title>
        <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    </head>
    <body>
        <ul class="pages">
            <li class="chat page">
                <div class="chatArea">
                    <ul class="messages"></ul>
                </div>
                <input class="inputMessage" placeholder="{{ __('Type here...') }}" />
            </li>
            <li class="login page">
                <div class="form">
                    <h3 class="title">{{ __('Hello! What is your name?') }}</h3>
                    <input class="usernameInput" type="text" maxlength="14" />
                </div>
            </li>
        </ul>
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>