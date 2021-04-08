Agregar un nuevo registro


<form action="{{ url('/pet') }}" method="post">
@csrf

<label for="name">Nombre</label>
<input type="text" name="name" id="name"><br/>

<label for="age">Edad:</label>
<input type="number" name="age" id="age"><br/>

<label for="color">Color:</label>
<input type="text" name="color" id="color"><br/>

<button type="submit">Save</button>

</form>