<x-layout>

    <div class="container">
        <div class="row">
            <div class="col-12">


                <h1>Contact {{ $contact->name }}</h1>

                <ul>
                    <li>{{ $contact->name }}</li>
                    <li>{{ $contact->email }}</li>
                    <li>{{ $contact->phone }}</li>
                </ul>
                {{-- <a href="{{ route('contacts.edit', $contact) }}">Edit</a> --}}
                <a hx-get="{{ route('contact.create') }}" hx-swap="outerHTML" hx-push-url="{{ route('contact.create') }}" hx-target="#test">Add new contact</a>
            </div>
        </div>
    </div>
</x-layout>
