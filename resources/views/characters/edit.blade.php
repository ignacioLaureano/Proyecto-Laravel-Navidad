<form action="{{ route('characters.update', $characters)}}" method="POST">

@csrf

@method('PUT')

    <!-- Nombre !-->
    <br>
    <label for="name">Nombre del jugador:</label>
    <input type="text" name="name"/>
    
    <!-- Nivel !-->
    <br>
    <label for="level">Nivel del jugador:</label>
    <input type="number" name="level"/>
    <!-- Es activo? !-->
    <br>
    <label for="isActive">Es activo?</label>
    <input type="checkbox" name="isActive" value="true"/>
    <!-- Genero !-->
        <div class="radio-group">
        <label>Gender</label>
        <div class="radio-option">
            <input type="radio" value="male" name="gender">
            <label>Male</label>
        </div>
      
        <div class="radio-option">
            <input type="radio" value="female" name="gender">
            <label>Female</label>
        </div>
    </div>
    <!-- Tipo !-->
    <div class="radio-group">
        <label>Tipo de enigma</label>
        <div class="radio-option">
            <input type="radio" value="mental" name="type">
            <label>Mental</label>
        </div>
    
        <div class="radio-option">
            <input type="radio" value="logic" name="type">
            <label>Lógico</label>
        </div>
    </div>
    <button type="submit">Submit</button>

</form>