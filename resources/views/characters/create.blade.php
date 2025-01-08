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
            <input type="radio" value="H" name="gender">
            <label>Male</label>
        </div>
        <br>
        <div class="radio-option">
            <input type="radio" value="M" name="gender">
            <label>Female</label>
        </div>
    </div>

    <button type="submit">Enviar</button>
</form>