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
    @if(!request()->headers->has('HX-Request'))
        <div class="container-fluid bg-warning">
            <div class="row bg-warning text-center justify-content-center">
                <div class="col-3">
                    <a hx-get="{{ route('home') }}" hx-target="#test" hx-swap="outerHTML" hx-push-url="{{ route('home') }}">
                        home
                    </a>
                </div>
                <div class="col-3">

                    <a hx-get="{{ route('contact.create') }}" hx-target="#test" hx-swap="outerHTML" hx-push-url="{{ route('contact.create') }}">
                        Aggiungi un contatto
                    </a>
                </div>
                <div class="col-3">

                    <a hx-get="{{ route('contact.index') }}" hx-target="#test" hx-swap="outerHTML" hx-push-url="{{ route('contact.index') }}">
                        Tutti i contatti
                    </a>
                </div>
            </div>
        </div>
    @endif

    <div class="min-vh100" id="test">
        {{ $slot }}
    </div>
</body>

</html>
