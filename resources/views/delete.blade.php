<form action="" method="POST" onsubmit="this.action='/users/' + document.getElementById('user_id').value;">
    @csrf
    @method('DELETE')

    <input type="number" id="user_id" placeholder="Entrer ID user">
    <button>Supprimer</button>
</form>
