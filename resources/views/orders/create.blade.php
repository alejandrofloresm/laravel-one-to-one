<form action="{{ route('orders.store') }}" method="POST">
    @csrf
    <label>Nombre</label>
    <input type="text" name="name"> <br>
    <label>Precio</label>
    <input type="number" name="amount"> <br>
    <input type="submit" value="Guardar">
</form>
