Editar registros de mascotas

<form action="{{ url('/pet/'. $pet->id) }}" method="post">
@csrf
{{ method_field('PUT') }}
@include('pet.form')

</form>