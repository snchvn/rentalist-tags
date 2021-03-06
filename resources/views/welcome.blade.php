<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rentalist React/Laravel Tags Editor</title>
    <!-- Styles -->
    <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">
</head>

<body>

    <!-- React root DOM -->
    <div id="user">
    </div>

    <!-- React JS -->
    <script src="{{ secure_asset('js/app.js') }}" defer></script>

</body>
</html>