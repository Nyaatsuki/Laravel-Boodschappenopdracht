<x-layout>
    <section class="tabel">
        <!--Top Row-->
        <div class="product" id="top-row">Product</div>
        <div class="prijs" id="top-row">Amount</div>
        <div class="aantal" id="top-row">Price</div>
        <div class="subtotaal" id="top-row">subtotal</div>
        <!--Entries TODO: Cleanup display in inspector-->
        @foreach ($groceries as $grocery)
        <li>{{ $grocery->name }}</li>
        <li>{{ $grocery->amount}}</li>
        <li>€{{ number_format($grocery->price, 2)}}</li>
        <li>€{{ number_format($grocery->price * $grocery->amount, 2)}}</li>
        @endforeach
        <!--Bottom Row-->
        <div class="product" id="bottom-row"></div>
        <div class="prijs" id="bottom-row"></div>
        <div class="aantal" id="bottom-row">Total:</div>
        <div class="subtotaal" id="bottom-row">€{{ number_format(array_sum($total), 2) }}</disv>
    </section>
</x-layout>