<h1>Crear contacto</h1>

<form action="{{ route('contacts.store') }}" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Nombre">
    <input type="text" name="surname" placeholder="Apellido">
    <input type="email" name="email" placeholder="Email">
    <input type="text" name="phone" placeholder="Teléfono">
    <button type="submit">Guardar</button>
</form>