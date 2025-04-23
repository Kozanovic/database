<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Add user</title>
</head>

<body>
    <h1>Add user</h1>
    <form action="{{ route('store') }}" method="post">
        @csrf
        <div>
            <label>Nom:</label>
            <input type="text" name="nom" value="{{ old('nom') }}">
            @error('nom')
                <div style="color: red; font-size: 14px;">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label>Prenom:</label>
            <input type="text" name="prenom" value="{{ old('prenom') }}">
            @error('prenom')
                <div style="color: red; font-size: 14px;">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label>Email:</label>
            <input type="text" name="email" value="{{ old('email') }}">
            @error('email')
                <div style="color: red; font-size: 14px;">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit">Add user</button>
    </form>
</body>

</html>
