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
        <p>{{ $trip['start_city'] }}</p>
        <p>{{ $trip['destination'] }}</p>
        <p>{{ $trip['price'] }}</p>
        <p>{{ $trip['duration'] }}</p>
        <p>{{ $trip['start_date'] }}</p>
        <p>{{ $trip['return_date'] }}</p>
    @endforeach
</body>
</html>