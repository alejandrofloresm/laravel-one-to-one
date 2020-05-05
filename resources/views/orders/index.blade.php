<h1>Órdenes</h1>
<table>
    <tr>
        <th>#</th>
        <th>Nombre</th>
        <th>Precio</th>
    </tr>
    @foreach ($orders as $item)
        <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->name }}</td>
            <td>{{ $item->amount }}</td>
        </tr>
    @endforeach
</table>
<a href="{{ route('orders.create') }}">Crea una nueva orden</a>
