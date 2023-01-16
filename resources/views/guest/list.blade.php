
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../css/app.css">
</head>
<body>
    <div class="card">
    @foreach ($movies as $movie)

        <div class="contents">
            <p>{{$movie['title']}}</p>
            <p>{{$movie['original_title']}}</p>
            <p>{{$movie['nationapty']}}</p>
            <p>{{$movie['date']}}</p>
            <p>{{$movie['vote']}}</p>
        </div>

    @endforeach
</div>
</body>
</html>



