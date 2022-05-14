<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
<link href="{{ asset('css/app.css') }}" rel="stylesheet">

<style>
    html,
    body {
        background-color: #131b22;
        color: #9ba3a7;
        font-family: 'Raleway', serif;
        font-weight: 100;
        height: 100vh;
        margin: 0;
    }

    .full-height {
        height: 100vh;
    }

    .flex-center {
        align-items: center;
        display: flex;
        justify-content: center;
    }

    .position-ref {
        position: relative;
    }

    .top-right {
        position: absolute;
        right: 10px;
        top: 18px;
    }

    .content {
        text-align: center;
    }

    .title {
        font-size: 84px;
    }

    .links > a {
        color: #636b6f;
        padding: 0 25px;
        font-size: 18px;
        font-weight: 600;
        letter-spacing: .1rem;
        text-decoration: none;
        text-transform: uppercase;
    }

    .links > a:hover {
        color: white;
    }

    .m-b-md {
        margin-bottom: 30px;
    }
</style>
<head>
    <title>Leystryku | Link Account</title>
    <meta name="theme-color" content="#F18676">
    <meta property="og:site_name" content="Ley's Discord Link"/>
    <meta property="og:description" content="Link your Discord account and Steam account in the Discord server to recieve access and support."/>
    <meta property="og:image" content="https://leystryku.support/img/icon-static.png"/>
    <meta property="og:url" content="https://leystryku.support/"/>
    <script async defer data-website-id="628aaba7-ea63-438a-b5c6-da6f5b4d7ad0" src="https://aly.felixklg.dev/VwDrVUy9RFqbFd6.js"></script>
</head>

<body>
<div class="flex-center position-ref full-height">

    <div class="content">
        <div class="title m-b-md">
            Leystryku's Discord Link
        </div>
        <div class="links">
            @if (Route::has('auth.discord'))
                @auth
                    <a href="{{ route('linked') }}">Link your accounts</a>
                @else
                    <a href="{{ route('auth.discord') }}">Link your accounts</a>
                @endauth
            @endif
        </div>
    </div>
</div>
</body>
