<x-layout>
    <section class="tabel">
        <!--Top Row-->
        <div class="product" id="top-row">Product</div>
        <div class="prijs" id="top-row">Aantal</div>
        <div class="aantal" id="top-row">prijs</div>
        <div class="subtotaal" id="top-row">Subtotaal</div>
        @foreach ($groceries as $grocery)
        <!--Entries-->
        <li>{{ $grocery->name }}</li>
        <li>{{ $grocery->amount}}</li>
        <li>€{{ number_format($grocery->price, 2)}}</li>
        <li>€{{ number_format($grocery->price * $grocery->amount, 2)}}</li>
        @endforeach
        <!--Bottom Row-->
        <div class="product" id="bottom-row"></div>
        <div class="prijs" id="bottom-row"></div>
        <div class="aantal" id="bottom-row">Totaal:</div>
        <div class="subtotaal" id="bottom-row">€{{ array_sum($total) }}</disv>
    </section>
</x-layout>