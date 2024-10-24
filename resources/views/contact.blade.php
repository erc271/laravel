<form method="POST" action="{{ route('contact.store') }}">
    @csrf
    <div>
        <label for="name">Nom :</label>
        <input type="text" name="name" id="name">
    </div>
    <div>
        <label for="email">Email :</label>
        <input type="email" name="email" id="email">
    </div>
    <div>
        <label for="messages">Message :</label>
        <textarea name="messages" id="messages"></textarea>
    </div>
    <button type="submit">Envoyer</button>
</form>
