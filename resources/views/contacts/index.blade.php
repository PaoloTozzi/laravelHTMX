<x-layout id="index">

    <h1>Contacts</h1>

    <ul>
        @foreach ($contacts as $contact)
            <li>
                <a href="{{ route('contact.show', $contact) }}">{{ $contact->name }}</a>
            </li>
        @endforeach
    </ul>
    <a href="{{ route('contact.create') }}">Add new contact</a>
</x-layout>