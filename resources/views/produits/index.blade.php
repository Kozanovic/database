<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All Products</title>
</head>

<body>
    <h1>All Products</h1>
    <button><a style="text-decoration: none; color: black;" href="{{ route('produits.create') }}">Ajouter un
            produit</a></button>
    <table border="1">
        <thead>
            <th>Nom</th>
            <th>Description</th>
            <th>Prix</th>
            <th>Stock</th>
            <th>Action</th>
        </thead>
        <tbody>
            @foreach ($produits as $produit)
                <tr>
                    <td>{{ $produit->nom }}</td>
                    <td>{{ $produit->description }}</td>
                    <td>{{ $produit->prix }}</td>
                    <td>{{ $produit->stock }}</td>
                    <td style="display: flex; justify-content: space-between;">
                        <button><a style="text-decoration: none; color: black;"
                                href="{{ route('produits.show', ['produit' => $produit]) }}">Afficher
                                details</a></button>

                        <button><a style="text-decoration: none;color:black;"
                                href="{{ route('produits.edit', ['produit' => $produit]) }}">Modifier
                            </a></button>
                        <form method="post"
                            onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer ce produit ?')"
                            action="{{ route('produits.destroy', ['produit' => $produit]) }}">
                            @method('delete')
                            @csrf
                            <button type="submit">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
