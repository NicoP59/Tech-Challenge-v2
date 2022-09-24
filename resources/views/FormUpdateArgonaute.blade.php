@extends('template')

<head>
    <link rel="stylesheet" href="{{ asset('css/Formulaire/updateArgo.css') }}">
</head>

@section('content')
    <main>

        <body>
            <p class="retour"><a href="/" class="retour-a"><i class="bi bi-arrow-return-left"></i></a></p>

            @foreach ($argonautes as $argonaute)
                <h1 class="update-argo">MODIFIER UN Argonaute</h1>
                <form action="/FormUpdate/{{ $argonaute['id'] }}" method="POST" class="form-update-argonaute">

                    @csrf
                    <div class="image">
                        <img src="/img/argos.png" alt="Argos" class="img-argo">

                        <div class="form-infos">
                            <div class="create-first">
                                <div class="label">
                                    <label for="abri">Nouveau nom</label>
                                </div>
                                <div>
                                    <input type="text" id="nom" name="nom" value={{ $argonaute->nom }} />
                                </div>
                            </div>

                            <div class="submit">
                                <button type="submit"><i class="bi bi-send-plus"></i></button>
                            </div>
                        </div>

                </form>
            @endforeach

        </body>

    </main>
@endsection
