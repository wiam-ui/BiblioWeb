<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Réservation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/reser.css') }}">

</head>
<body>
    <div class="form-container">
        @if (session('message'))
         <div class="alert alert-success">
             {{ session('message') }}
            </div>
        @endif
        <h1>Formulaire De Reservation</h1>
        <form action="{{ route('reservation.store',$livre) }}"  method="post">
            @csrf
            <div class="form-group">
                <label for="time">Date Emprunt : </label>
                <input type="date" id="" name="date_emprunt">
                @error('date_emprunt')
                {{$message}}
                @enderror
            </div>
            <div class="form-group">
                <label for="time">Heure Emprunt : </label>
                <input type="time" id="time" name="heure_emprunt" >
                @error('heure_emprunt')
                {{$message}}
                @enderror
            </div>
            <div class="form-group">
                <label for="date">Date de Réservation :</label>
                <input type="date" id="date" name="date_reservation">
                @error('date_reservation')
                {{$message}}
                @enderror
            </div>

            <button type="submit">Réserver</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.css"></script>
</body>
</html>
