<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>{{ isset($produit) ? 'Modifier un produit' : 'Ajouter un produit' }}</title>
</head>

<body>
    <h1>{{ isset($produit) ? 'Modifier un produit' : 'Ajouter un produit' }}</h1>

    <form action="{{ isset($produit) ? route('produits.update', ['produit' => $produit]) : route('produits.store') }}" method="post">
        @csrf
        <div>
            <label>Nom:</label>
            <input type="text" name="nom" value="{{ old('nom', $produit->nom ?? '') }}">
            @error('nom')
                <div style="color: red;">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label>Description:</label>
            <textarea name="description" rows="4" cols="50">{{ old('description', $produit->description ?? '') }}</textarea>
            @error('description')
                <div style="color: red;">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label>Prix:</label>
            <input type="number" name="prix" step="0.01" value="{{ old('prix', $produit->prix ?? '') }}">
            @error('prix')
                <div style="color: red;">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label>Stock:</label>
            <input type="number" name="stock" value="{{ old('stock', $produit->stock ?? '') }}">
            @error('stock')
                <div style="color: red;">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit">{{ isset($produit) ? 'Modifier' : 'Ajouter' }}</button>
    </form>
</body>

</html>
