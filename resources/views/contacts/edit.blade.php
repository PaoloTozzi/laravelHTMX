<x-layout>
    <div class="container mt-5" id="form-update">
        <div class="row">
            <div class="col-12 text-center">
                <h1>Modifica il contatto {{ $contact->name }}</h1>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8">
                <form hx-post="{{ route('contact.update', $contact) }}" hx-target="#test" hx-swap="outerHTML" hx-push-url="{{route('contact.show', $contact)}}">
                    @csrf
                    @method('PUT')
                    <div>
                        <label for="name">Name</label>
                        <input class="form-control @error('name') is-invalid @enderror" type="text" name="name"
                            id="name" value="{{ old('name') }}">
                        @error('name')
                            <p>{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label for="email">Email</label>
                        <input class="form-control @error('email') is-invalid @enderror" type="text" name="email"
                            id="email" value="{{ old('email') }}">
                        @error('email')
                            <p>{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label for="phone">Phone</label>
                        <input placeholder="1234567890" class="form-control @error('phone') is-invalid @enderror"
                            type="tel" pattern="[0-9]{10}" name="phone" id="phone"
                            value="{{ old('phone') }}">
                        @error('phone')
                            <p>{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="d-flex mx-auto">
                        <button class="btn btn-success" type="submit">Edit Contact</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>