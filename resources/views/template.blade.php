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
    
      <img src="https://www.wildcodeschool.com/assets/logo_main-e4f3f744c8e717f1b7df3858dce55a86c63d4766d5d9a7f454250145f097c2fe.png" alt="Wild Code School logo" />
    <h1>Les argonautes</h1>
  </header>


  {{-- @yield est principalement utilisé pour définir une section dans une mise en page --}}
  @yield('content')


  {{-- FOOTER --}}

  <footer>
    <p>Réalisé par Nicolas pour l'entretien technique </p>
  </footer>

</body>