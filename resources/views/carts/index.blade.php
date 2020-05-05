<h1>Carritos</h1>
<table>
    <tr>
        <th>#</th>
        <th>Nombre</th>
        <th># de Orden</th>
        <th>Precio de la orden</th>
    </tr>
    @foreach ($carts as $item)
        <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->name }}</td>
            <td>{{ $item->order->id }}</td>
            <td>{{ $item->order->amount }}</td>
        </tr>
    @endforeach
</table>
