<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Update user</title>
</head>

<body>
    <h1>Update user</h1>
    <form action="{{ route('update', ['id' => $user->matricule]) }}" method="post">
        @csrf
        <div>
            <label>Nom:</label>
            <input type="text" name="nom" value="{{ $user->nom }}">
            @error('nom')
                <div style="color: red; font-size: 14px;">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label>Prenom:</label>
            <input type="text" name="prenom" value="{{ $user->prenom }}">
            @error('prenom')
                <div style="color: red; font-size: 14px;">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label>Email:</label>
            <input type="text" name="email" value="{{ $user->email }}">
            @error('email')
                <div style="color: red; font-size: 14px;">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit">Update user</button>
    </form>
</body>

</html>
