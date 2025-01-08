<form action="{{ route('characters.store') }}" method="post">
    @csrf

    <label for="name">Nombre del jugador:</label>
    <input type="text" name="name"/>

    <label for="account_creation">Fecha de registro:</label>
    <input type="date" name="account_creation"/>
    


    <button type="submit">Enviar</button>
</form>