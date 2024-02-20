<x-layout>
    <div class="create-page">
        <form method="POST" action="{{ route('groceries.update', $grocery) }}">
            @csrf
            @method('PUT')
            <div class="create-form">
                <label>Category:</label>
                <select name='category_id'>
                    <option value="{{$grocery->category->id}}" selected hidden>{{UCWords($grocery->category->name)}}</option>
                    @foreach ($categories as $category)
                    <option value="{{$category->id}}">{{UCWords($category->name)}}</option>
                    @endforeach
                </select><br><br>
                <label>Product:</label>
                <input style="margin-left: 2px;" type="name" name="name" value="{{ $grocery->name }}"><br><br>
                <label>Price:</label>
                <input style="margin-left: 24px;" type="number" name="price" step=".01" value="{{ $grocery->price }}"><br><br>
                <label>Amount:</label>
                <input type="number" name="amount" value="{{ $grocery->amount }}">
                <x-errors></x-errors>
            </div>
            <button class=create-button type="submit">Edit</button>
        </form>
    </div>
</x-layout>