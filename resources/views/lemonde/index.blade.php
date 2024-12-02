<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Articles - Le Monde</title>
</head>
<body>
    <h1>Articles de Le Monde ({{ now()->toDateString() }})</h1>
    <ul>
        @forelse ($articles['data'] ?? [] as $article)
            <li>
                <h2>{{ $article['title'] }}</h2>
                <p>{{ $article['content'] }}</p>
                <small>Category: {{ $article['category'] }}</small>
            </li>
        @empty
            <p>Aucun article disponible.</p>
        @endforelse
    </ul>
</body>
</html>
