<x-layout>
    <section class="index-page">
        @if($groceries->count())
        <section class="table">
            <!--Top Row-->
            <div class="product" id="top-row">Product</div>
            <div class="Category" id="top-row">Category</div>
            <div class="prijs" id="top-row">Amount</div>
            <div class="aantal" id="top-row">Price</div>
            <div class="subtotaal" id="top-row">subtotal</div>
            <div id="top-row"></div>
            <div id="top-row"></div>
            <!--Entries TODO: Cleanup display in inspector-->
            @foreach ($groceries as $grocery)
            <li><strong>{{ UCWords($grocery->name) }}</strong></li>
            <li>{{UCWords($grocery->category->name)}}</li>
            <li>{{ $grocery->amount}}</li>
            <li>€{{ number_format($grocery->price, 2)}}</li>
            <li>€{{ number_format($grocery->price * $grocery->amount, 2)}}</li>
            <a href="groceries/{{ $grocery->id }}/edit">Edit</a>
            <form action="{{ route('groceries.destroy', $grocery) }}" method="POST">
                @csrf
                @method('DELETE')
                <button value="submit">delete</button> 
            </form>
            @endforeach
            <!--Bottom Row-->
            <div id="bottom-row"></div>
            <div class="product" id="bottom-row"></div>
            <div class="prijs" id="bottom-row"></div>
            <div class="aantal" id="bottom-row">Total:</div>
            <div class="subtotaal" id="bottom-row">€{{ number_format(array_sum($total), 2) }}</div>
            <div id="bottom-row"></div>
            <div id="bottom-row"></div>
        </section>
        @else
        <a>You haven't created any groceries yet!</a>
        @endif
    </section>
</x-layout>