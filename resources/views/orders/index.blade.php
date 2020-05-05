<h1>Órdenes</h1>
<table>
    <tr>
        <th>#</th>
        <th>Nombre</th>
        <th>Precio</th>
        <th></th>
    </tr>
    @foreach ($orders as $item)
        <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->name }}</td>
            <td>{{ $item->amount }}</td>
            <td>
                <a href="{{ route('orders.carts.create', $item) }}">
                    Crea el carrito de la orden
                </a>
            </td>
        </tr>
    @endforeach
</table>
<a href="{{ route('orders.create') }}">Crea una nueva orden</a>

<hr>

<a href="{{ route('carts.index') }}">Lista de carritos</a>
