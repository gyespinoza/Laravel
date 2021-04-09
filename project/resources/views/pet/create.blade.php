Agregar un nuevo registro

<form action="{{ url('/pet') }}" method="post">
@csrf

@include('pet.form')

</form>