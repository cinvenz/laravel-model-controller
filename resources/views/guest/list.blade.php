<ul>
    @foreach ($movies as $movie)
        <li><div>{{$movie['title']}}</div></li>
        <li><div>{{$movie['original_title']}}</div></li>
        <li><div>{{$movie['nationality']}}</div></li>
        <li><div>{{$movie['date']}}</div></li>
        <li><div>{{$movie['vote']}}</div></li>
    @endforeach
</ul>
