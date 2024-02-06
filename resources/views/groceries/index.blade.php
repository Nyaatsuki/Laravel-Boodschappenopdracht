<x-layout>
    <section class="index-page">
        <section class="tabel">
            <!--Top Row-->
            <div class="product" id="top-row">Product</div>
            <div class="prijs" id="top-row">Amount</div>
            <div class="aantal" id="top-row">Price</div>
            <div class="subtotaal" id="top-row">subtotal</div>
            <div id="top-row"></div>
            <div id="top-row"></div>
            <!--Entries TODO: Cleanup display in inspector-->
            @foreach ($groceries as $grocery)
            <li>{{ $grocery->name }}</li>
            <li>{{ $grocery->amount}}</li>
            <li>€{{ number_format($grocery->price, 2)}}</li>
            <li>€{{ number_format($grocery->price * $grocery->amount, 2)}}</li>
            <form action="{{ route('groceries.edit', $grocery) }}">
                <button type="submit">edit</button>
            </form>
            <form action="{{ route('groceries.destroy', $grocery) }}" method="POST">
                @csrf
                @method('DELETE')
                <button value="submit">delete</button> 
            </form>
            @endforeach
            <!--Bottom Row-->
            <div class="product" id="bottom-row"></div>
            <div class="prijs" id="bottom-row"></div>
            <div class="aantal" id="bottom-row">Total:</div>
            <div class="subtotaal" id="bottom-row">€{{ number_format(array_sum($total), 2) }}</div>
            <div id="bottom-row"></div>
            <div id="bottom-row"></div>
        </section>
    </section>
</x-layout>