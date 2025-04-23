<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data</title>
</head>

<body>
    <h1>All users</h1>
    <h4>Number of users : {{ count($users) }}</h4>
    <div style="margin-bottom: 20px;">
        <a style="text-decoration: none; color: white; padding: 10px; background-color: blue;"
            href="{{ route('create') }}">Add a new user</a>
    </div>
    @if (session('message'))
        <h1 id="message" style="padding: 12px; background-color: aqua;">
            {{ session('message') }}
        </h1>
    @endif

    <table border="1">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->nom }}</td>
                    <td>{{ $user->prenom }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        <form action="{{ route('destroy', ['id' => $user->matricule]) }}" method="post"
                            onsubmit="handleSubmit()">
                            @csrf
                            @method('delete')
                            <button type="submit">Delete</button>
                        </form>
                        <a href="{{ route('edit', ['id' => $user->matricule]) }}">
                            <button type="submit">Edit</button>
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <script>
        const handleSubmit = () => {
            return confirm('voulez vous supprimer ce utilisateur ?');
        }
        setTimeout(function() {
            const message = document.getElementById('message');
            if (message) {
                message.style.display = 'none';
            }
        }, 3000);
    </script>
</body>

</html>
