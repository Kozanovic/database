<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Détails du produit</title>
</head>

<body>
    <h1>Détails du produit</h1>
    <p> {{ $produit->nom }}</p>
    <p> {{ $produit->description }}</p>
    <p> {{ $produit->prix }} €</p>
    <p> {{ $produit->stock }}</p>

    <a href="{{ route('produits.index') }}"> &lArr; Retour à la liste</a>
</body>

</html>
