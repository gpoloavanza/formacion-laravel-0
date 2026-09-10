<h1>Editar contacto</h1>

<form action="{{ route('contacts.update', $contact->id) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="name" placeholder="Nombre" value="{{ $contact->name }}">
    <input type="text" name="surname" placeholder="Apellido" value="{{ $contact->surname }}">
    <input type="email" name="email" placeholder="Email" value="{{ $contact->email }}">
    <input type="text" name="phone" placeholder="Teléfono" value="{{ $contact->phone }}">
    <button type="submit">Guardar</button>
</form>