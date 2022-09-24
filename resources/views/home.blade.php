@extends('template')

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/home/home.css') }}">

    <title>Les Argonaute</title>
</head>
@section('content')
    <main>

        <body>
            <img src="img/argos.png" alt="Argo" class="argo" />
            <h1 class="titre-argo">Recruter un(e) Argonaute</h1>

            <form method="POST" action="/create-argonaute" class="new-member-form">
                @csrf
                <div class="input">
                    <div>
                        <input id="nom" name="nom" type="text" placeholder="Charalampos" />
                    </div>
                    <div>
                        <button class="embarquer" type="submit">Ok</button>
                    </div>
                </div>
            </form>

            <h2 class="titre-equipages">LISTE DES ARGONAUTES</h2>
            <article class="member-list">
                {{-- Le foreach va servir a boucler le model pour chaque donnée inséré,recuperer le tableau et il va créer une div --}}
                @foreach ($argonautes as $argonaute)
                    <section class="border">
                        <div class="icone">
                            <i class="bi bi-person"></i>
                        </div>
                        <p class="equipage"><span class="bold"> Nom :</span>
                            {{ $argonaute->nom }}</p>
                        <div class="actions">
                            <div>
                                <a class="text-danger" href="/delete-argonaute/{{ $argonaute->id }}"
                                    onclick="return confirm('Cette argonautes va etre supprimer. Êtes vous sûr(e) de vouloir le supprimer ? CONFIRMER ?')"><i
                                        class="bi bi-trash"></i></a>
                            </div>
                            <div>
                                <a class="text-primary" href="/FormUpdate/{{ $argonaute->id }}"><i
                                        class="bi bi-pencil"></i></a>
                            </div>
                        </div>
                    </section>
                @endforeach
            </article>
        </body>
    </main>
@endsection
