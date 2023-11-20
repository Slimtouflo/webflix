<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <nav>
        <a href="/">Accueil</a>
        <a href="/fiorella">Présentation</a>
        <a href="/fiorella?color=bleu">Fiorella Bleue</a>
        <a href="/categories">Catégories</a>
        <a href="/films">Films</a>
        <a href="/a-propos">A propos</a>
    </nav>

    @yield('content')

    <footer>
        Webflix &copy; {{ date('Y') }}
    </footer>
</body>
</html>
