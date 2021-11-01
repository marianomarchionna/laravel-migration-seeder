<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome</title>
</head>
<body>
    @foreach ($trips as $trip)
        <p><strong>Città di partenza: </strong>{{ $trip['start_city'] }}</p>
        <p><strong>Città di arrivo: </strong>{{ $trip['destination'] }}</p>
        <p><strong>Prezzo: </strong>{{ $trip['price'] }} €</p>
        <p><strong>Durata: </strong>{{ $trip['duration'] }}</p>
        <p><strong>Data partenza: </strong>{{ $trip['start_date'] }}</p>
        <p><strong>Data arrivo: </strong>{{ $trip['return_date'] }}</p><br>
    @endforeach
</body>
</html>