
<!DOCTYPE html>
<html>
<head>
    <title>Liste</title>
    <h2>Liste des utilisateurs</h2>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Nom</th>
        <th>Email</th>
    </tr>

    @foreach($users as $user)
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
        </tr>
    @endforeach

</table>
</head>
<body>
 