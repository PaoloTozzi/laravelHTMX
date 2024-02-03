<x-layout>

    <h1>Contact {{$contact->name}}</h1>

    <ul>
        <li>{{ $contact->name }}</li>
        <li>{{ $contact->email }}</li>
        <li>{{ $contact->phone }}</li>
    </ul>
    {{-- <a href="{{ route('contacts.edit', $contact) }}">Edit</a> --}}
    <a href="{{ route('contact.create') }}">Add new contact</a>
</x-layout>