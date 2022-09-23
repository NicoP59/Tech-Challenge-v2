@extends('template')

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/home/home.css') }}">

    <title>Argonaute</title>
</head>
@section('content')
    <main>

        <body>
            <img src="img/argos.jpg" alt="Argo" class="argo" />
            <h1 class="titre-argo">Ajouter un(e) Argonaute</h1>
            <form method="POST" action="/create-argonaute" class="new-member-form">
                @csrf
                <label class="nom-argo" for="nom">Nom de l&apos;Argonaute</label>
                <input id="nom" name="nom" type="text" placeholder="Charalampos" />
                <button class="embarquer" type="submit">Envoyer</button>
            </form>

            <h2>Membres de l'équipage</h2>
            <section class="member-list">
                @foreach ($argonautes as $argonaute)
                    <div class="border">
                        <p class="equipage"><span class="bold">Nom :</span>
                            {{ $argonaute->nom }}</p>

                        <a class="text-danger" href="/delete-argonaute/{{ $argonaute->id }}"
                            onclick="return confirm('Cette argonautes va etre supprimer. Êtes vous sûr(e) de vouloir le supprimer ? CONFIRMER ?')"><i class="bi bi-trash"></i></a>

                        <a class="text-primary" href="/FormUpdate/{{ $argonaute->id }}"><i class="bi bi-pencil"></i></a>
                    </div>
                @endforeach
            </section>
        </body>
    </main>
@endsection
