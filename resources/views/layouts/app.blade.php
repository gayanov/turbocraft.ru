<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>{{ config('app.name') }} - Покупка доната</title>
    <!--<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">-->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="theme-color" content="#140535">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
</head>
<body>
<div class="container">
    <nav class="navbar navbar-expand-lg navbar-dark bg-transparent navbar-custom">
        <a class="navbar-brand" href="/">{{ config('app.name') }}</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('main') }}">
                        <i class="icon-home"></i>
                        Главная
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('pay_guide') }}">
                        <i class="icon-question-circle"></i>
                        Как купить донат?
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('rules') }}">
                        <i class="icon-pencil"></i>
                        Правила
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('description_products') }}">
                        <i class="icon-list-numbered"></i>
                        Описание привилегий
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('contacts') }}">
                        <i class="icon-id-badge"></i>
                        Контакты
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    @yield('content')
</div>

<footer>
    <div class="footer-inner">
        <!-- Footer Text -->
        <div class="footer-text text-center">
            <div class="row ml-0 mr-0">
                <div class="col-sm-4 col-md-4">
                    © {{ config('app.name') }} {{ date('Y') }}
                </div>
                <div class="col-sm-4 col-md-4 d-flex justify-content-center footer-social-links footer-social-links__rounded">
                    <a href="#" title="VK group">
                        <i class="icon-vk"></i>
                    </a>
                </div>
            </div>
        </div>
        <!-- Footer Text / End -->

    </div>
</footer>

<script async src="{{ asset('js/app.js') }}"></script>
</body>
</html>
