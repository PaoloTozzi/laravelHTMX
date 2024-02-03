<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body hx-boost="true">
    @session('message')
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endsession
    @unless ($errors->any() || !request()->headers->has('HX-Request'))
        <x-navbar />
    @endunless

    <div class="min-vh100">
        {{ $slot }}
    </div>
</body>

</html>
