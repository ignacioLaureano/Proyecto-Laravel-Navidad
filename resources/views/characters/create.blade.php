<form action="{{ route('characters.store') }}" method="post">
    @csrf

    <label for="name">Nombre del jugador:</label>
    <input type="text" name="name"/>

    <label for="account_creation">Fecha de registro:</label>
    <input type="date" name="account_creation"/>

    <!-- gender !-->
    <div class="radio-group">
        <label>Gender</label>
        <div class="radio-option">
            <input type="radio" value="male" name="gender">
            <label>Hombre</label>
        </div>

        <div class="radio-option">
            <input type="radio" value="female" name="gender">
            <label>Mujer</label>
        </div>
    </div>

    <!-- Type !-->
    <div class="radio-group2">
        <label>Tipo de juego: </label>
        <div class="radio-option2">
            <input type="radio" value="mental" name="type">
            <label>Mentales</label>
        </div>

        <div class="radio-option2">
            <input type="radio" value="logic" name="type">
            <label>Logicos</label>
        </div>
    </div>

    <button type="submit">Enviar</button>
</form>