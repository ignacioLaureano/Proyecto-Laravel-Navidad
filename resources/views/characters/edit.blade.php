<form action="{{ route('characters.update', $characters)}}" method="POST">

@csrf

@method('PUT')


    <label for="name">Nombre del jugador:</label>
    <input type="text" name="name"/>
    <label for="genre">Genero:</label>
    <input type="text" name="genre"/>
    <label for="level">Nivel del jugador:</label>
    <input type="text" name="level"/>
    <label for="isActive">Es</label>
    <input type="number" name="nHoras"/>
    <button type="submit">Submit</button>

</form>