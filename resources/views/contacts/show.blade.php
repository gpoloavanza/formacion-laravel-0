<h1>{{ $contact->name }} {{ $contact->surname }}</h1>
<p>Email: {{ $contact->email }}</p>
<p>Teléfono: {{ $contact->phone }}</p>

<a href="{{ route('contacts.index') }}">Volver</a>