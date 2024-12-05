<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Articles</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 900px;
            margin: 50px auto;
            padding: 20px;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f8f9fa;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Liste des Articles</h1>
        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Titre</th>
                    <th>Auteur</th>
                    <th>Contenu</th>
                    <th>Publié le</th>
                </tr>
            </thead>
            <tbody>
                @forelse($articles as $index => $article)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $article['title'] ?? 'N/A' }}</td>
                        <td>{{ $article['author'] ?? 'N/A' }}</td>
                        <td>{{ Str::limit($article['content'] ?? 'Pas de contenu', 50) }}</td>
                        <td>{{ $article['published_at'] ?? 'N/A' }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" style="text-align: center;">Aucun article disponible</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</body>
</html>
