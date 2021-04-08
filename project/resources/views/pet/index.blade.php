Registros de mascotas

<table border="1">
    <thead>
        <th>#</th>
        <th>Name</th>
        <th>Age</th>
        <th>Color</th>
    </thead>
    <tbody>
        @foreach($pets as $pet)
            <tr>
                <td> {{ $pet->id}} </td>
                <td> {{ $pet->name}} </td>
                <td> {{ $pet->age}} </td>
                <td> {{ $pet->color}} </td>
            </tr>
        @endforeach
    </tbody>
</table>
