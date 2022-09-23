{{-- HEADER --}}

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/templates/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/templates/footer.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">


    <title>Argonautes</title>
</head>

<body>

    {{-- HEADER --}}

    <header>

        <img src="/img/soleil.png" />
        <h1>LES ARGONAUTES</h1>
    </header>
    <div class="custom-shape-divider-top-1663942047">
        <svg data-name="Couche 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120 " preserveAspectRatio="none">
            <path d="M1200 0L0 0 598.97 114.72 1200 0z" class="shape-fill"></path>
        </svg>
    </div>

    {{-- @yield est principalement utilisé pour définir une section dans une mise en page --}}
    @yield('content')


    {{-- FOOTER --}}
    <div class="custom-shape-divider-bottom-1663943871">
        <svg data-name="Couche 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120 " preserveAspectRatio="none">
            <path
                d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172, 41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z"
                class="shape-fill"></path>
        </svg>
    </div>
    <footer>

        <div class="footer">
            <p>
                Les images utilisées ne sont pas libres de droits. Pour toute demande de
                suppression d'une image qui vous appartient, merci de nous contacter.
            </p>
            <p>
                Ceci est un projet pour un entretien technique.
            </p>
            <p>
                © Copyright / Nicolas Payne / 2022
            </p>
        </div>
    </footer>

</body>
