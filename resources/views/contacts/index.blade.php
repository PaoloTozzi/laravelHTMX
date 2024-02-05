<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12">


                <h1>Contacts</h1>

                <ul>
                    @foreach ($contacts as $contact)
                        <li>
                            <a hx-get="{{ route('contact.show', $contact) }}"
                                hx-push-url="{{ route('contact.show', $contact) }}"
                                hx-target="#test"
                                hx-swap="outerHTML">{{ $contact->name }}</a>
                        </li>
                    @endforeach
                </ul>
                <a hx-get="{{ route('contact.create') }}" hx-swap="outerHTML" hx-target="#test" hx-push-url="{{ route('contact.create') }}">Add new contact</a>
            </div>
        </div>
    </div>
</x-layout>
