
<!DOCTYPE html>
<html lang="lv">
<head>
    <meta charset="UTF-8">
    <title>Posts saraksts</title>
</head>
<body>
    <h1>Visi posti</h1>

    <a href="/posts/create">Izveidot jaunu postu</a>
    
    @if($posts->isEmpty())
        <p>Nav neviena posta.</p>
    @else
        <ul>
            @foreach($posts as $post)
                <li>
                    <strong>{{ $post->title }}</strong><br>
                    {{ $post->content }}
                </li>
            @endforeach
        </ul>
    @endif

</body>
</html>
