<!-- @extends('layouts.app')

@section('content')
    <h1>Articles du jour - Le Monde</h1>

    @if (isset($message))
        <p>{{ $message }}</p>
    @else
        <ul>
            @foreach ($articles as $article)
                <li>
                    <h2>{{ $article['title'] }}</h2>
                    <p>{{ $article['summary'] }}</p>
                    <a href="{{ $article['url'] }}" target="_blank">Lire l'article complet</a>
                </li>
            @endforeach
        </ul>
    @endif
@endsection -->

<!-- <!DOCTYPE html>
<html>
<head>
    <title>Articles - Le Monde</title>
</head>
<body>
    <h1>Articles de Le Monde</h1>

    @if(!empty($articles['data']) && count($articles['data']) > 0)
        <ul>
            @foreach($articles['data'] as $article)
                <li>
                    <h2>{{ $article['title'] }}</h2>
                    <p>{{ $article['content'] }}</p>
                    <small>Publié le : {{ $article['published_at'] }}</small>
                </li>
            @endforeach
        </ul>
    @else
        <p>Aucun article disponible pour aujourd'hui.</p>
    @endif
</body>
</html> -->
<!-- resources/views/articles/index.blade.php -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Articles du Le Monde</title>
</head>
<body>
    <h1>Articles en Une du journal Le Monde - {{ date('d/m/Y') }}</h1>

    @if (empty($articles))
        <p>Aucun article disponible pour aujourd'hui.</p>
    @else
    <ul>
    @foreach ($articles as $article)
        <li>
            <h2>{{ $article['title'] }}</h2>
            <p>{{ $article['summary'] }}</p>
            <a href="{{ $article['url'] }}" target="_blank">Lire l'article complet</a>
        </li>
    @endforeach
</ul>

    @endif
</body>
</html>




