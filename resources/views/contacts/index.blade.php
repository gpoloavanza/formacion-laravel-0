<h1>Contacts</h1>

<a href="{{ route('contacts.create') }}">Nuevo contacto</a>

@foreach ($contacts as $contact)
    <div>
        <p>{{ $contact->name }} {{ $contact->surname }} - {{ $contact->email }} - {{ $contact->phone }}</p>

        <a href="{{ route('contacts.show', $contact->id) }}">Ver</a>
    

        <form action="{{ route('contacts.destroy', $contact->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Eliminar</button>
        </form>

        <a href="{{ route('contacts.edit', $contact->id) }}">Editar</a>
    </div>
@endforeach

{{ $contacts->links() }}