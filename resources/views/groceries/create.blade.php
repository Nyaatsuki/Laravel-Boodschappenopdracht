<x-layout>
    <div class="create-page">
        <form method="POST" action="/groceries">
            @csrf
            <div class="create-form">
                <label>Product:</label>
                <input style="margin-left: 2px;" type="name" name="name"><br><br>
                <label>Price:</label>
                <input style="margin-left: 24px;" type="number" name="price" step=".01"><br><br>
                <label>Amount:</label>
                <input type="number" name="amount"><br>
            </div>
            <button class=create-button type="submit">Create</button>
        </form>
    </div>
</x-layout>