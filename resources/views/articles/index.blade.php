

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Articles</title>
</head>
<body>
    <h1>Liste des Articles</h1>
    <ul>
        @foreach($articles as $article)
            <li>
                <strong>{{ $article->title }}</strong><br>
                Auteur: {{ $article->author }}<br>
                Date de publication: {{ $article->publication_date }}<br>
                <p>{{ $article->content }}</p>
            </li>
        @endforeach
    </ul>
</body>
</html>