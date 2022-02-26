<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
<link href="{{ asset('css/styles.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <script async defer data-website-id="628aaba7-ea63-438a-b5c6-da6f5b4d7ad0" src="https://analytics.felixklg.dev/umami.js"></script>

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
<title>Leystryku | Account Linked</title>
    <script async defer data-website-id="628aaba7-ea63-438a-b5c6-da6f5b4d7ad0" src="https://analytics.felixklg.dev/VwDrVUy9RFqbFd6.js"></script>
</head>

<body>
<div class="flex-center position-ref full-height">


    <div class="content">
        <div class="title m-b-md">
            Leystryku's Discord Link
        </div>

        @if (session('error'))
            <div class="rounded-md bg-red-50 p-4 mb-6">
                <div class="flex">
                    <div class="flex-shrink-0">
                        <!-- Heroicon name: solid/x-circle -->
                        <svg class="h-5 w-5 text-red-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                             fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd"
                                  d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z"
                                  clip-rule="evenodd"/>
                        </svg>
                    </div>
                    <div class="ml-3">
                        <h3 class="text-sm font-medium text-red-800">
                            {{session('error')}}
                        </h3>
                    </div>
                </div>
            </div>
        @endif

        <div class="links">
            <a href="/discord">Account linked.</a>
        </div>
    </div>
</div>
</body
