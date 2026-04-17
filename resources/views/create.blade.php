
<!DOCTYPE html>
<html>
<head>
    <title>Create Product</title>
</head>
<body>

<h2>Ajouter un produit</h2>

<form method ="post" action="/users">
    @csrf

    <label>Nom :</label>
    <input type="text" name="name"><br><br>

    <label>email :</label>
    <input type="text" name="email"><br><br>

    <label>password :</label>
    <input type="password" name="Mdp"><br><br>

    <button type="submit">Ajouter</button>
</form>

</body>
</html>