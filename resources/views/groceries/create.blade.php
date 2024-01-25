<x-layout>
    <div class="create-page">
        <form method="POST" action="/groceries">
            @csrf
            <div class="create-form">
                <label>Product:</label>
                <input style="margin-left: 2px;" type="name" name="name" id="name"><br><br>
                <label>Price:</label>
                <input style="margin-left: 24px;" type="number" name="price" id="price" step=".01"><br><br>
                <label>Amount:</label>
                <input type="amount" name="amount" id="amount"><br>
            </div>
            <button class=create-button type="submit">Create</button>
        </form>
    </div>
</x-layout>