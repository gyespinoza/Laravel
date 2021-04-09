Registros de mascotas
@extends('layouts.app')


<a href="{{ url('pet/create') }}">Add Pet</a>
<table class="table">
    <thead>
        <th>#</th>
        <th>Name</th>
        <th>Age</th>
        <th>Color</th>
        <th>Action</th>
    </thead>
    <tbody>
        @foreach($pets as $pet)
            <tr>
                <td> {{ $pet->id}} </td>
                <td> {{ $pet->name}} </td>
                <td> {{ $pet->age}} </td>
                <td> {{ $pet->color}} </td>

                <td><a href="{{ url('/pet/'.$pet->id.'/edit') }}">Editar</a></td>
                <!--formulario para eliminar-->
                <form method='POST' action="{{ url('/pet/'.$pet->id) }}">
                    @csrf
                    {{ method_field('DELETE') }} <!--define el metodo que es necesario para eliminar-->
                    <td><input type="submit" onclick="return confirm('Desea eliminar el registro?')" value="Eliminar"></td>
                </form>
            </tr>
        @endforeach
    </tbody>
</table>
