<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Livres de psychologie</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/livre.css') }}">

    </head>
    <body>
        <section class="categorie">
        <h1>Les Romans</h1>

        <div class="box-container">
            @foreach($livres as $book)
                <div class="box">
                    <img src="{{ asset('img/' . $book->image) }}" alt="" srcset="">
                    <div class="content">
                        <h3>Titre: {{$book->titre}}</h3>
                        <p>Auteur: {{$book->auteur}}</p>
                        <p>Editeur: {{$book->editeur}}</p>
                        <p>Date de Edition : {{$book->dateEdition}}</p>
                        <p>Nombre d'exemplaire: {{$book->NbrExemplaire}}</p>
                        <a href="{{ route('reservation.create', $book->id)}}" class="button">Reserver</a>
                    </div>
                </div>
            @endforeach

        </div>
        </section>
    </body>
</html>
