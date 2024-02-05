<x-layout>

    <div class="container" id="form-contact">
        <div class="row">
            <div class="col-8">


                <h1>Add new contact</h1>
                <form hx-post="{{ route('contact.store') }}" hx-target="#form-contact" hx-swap="outerHTML" hx-push-url="{{route('contact.index')}}">
                    @csrf
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
                        <button class="btn btn-success" type="submit">Add new contact</button>
                    </div>
                </form>
                <a hx-get="{{ route('contact.index') }}" hx-swap="outerHTML" hx-push-url="{{ route('contact.index') }}" hx-target="#test">Back to contacts</a>

            </div>
        </div>
    </div>
</x-layout>
