<x-layout>
    <div class="create-page">
        <form method="POST" action="{{ route('groceries.update', $grocery) }}">
            @csrf
            @method('PUT')
            <div class="create-form">
                <label>Product:</label>
                <input style="margin-left: 2px;" type="name" name="name" value="{{ $grocery->name }}"><br><br>
                <label>Price:</label>
                <input style="margin-left: 24px;" type="number" name="price" step=".01" value="{{ $grocery->price }}"><br><br>
                <label>Amount:</label>
                <input type="number" name="amount" value="{{ $grocery->amount }}"><br>
                @if ($errors->any())
                <div class="alert">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <label>{{ $error }}</label>
                        <br>
                        @endforeach
                    </ul>
                </div>
                @endif
            </div>
            <button class=create-button type="submit">Edit</button>
        </form>
    </div>
</x-layout>