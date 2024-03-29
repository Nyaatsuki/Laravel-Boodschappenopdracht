<x-layout>
    <section class="index-page">
        @if($groceries->count())
        <section class="table">
            <!--Top Row-->
            <div class="product" id="top-row">Product</div>
            <div class="category" id="top-row">Category</div>
            <div class="prijs" id="top-row">Amount</div>
            <div class="aantal" id="top-row">Price</div>
            <div class="subtotaal" id="top-row">subtotal</div>
            <div id="top-row"></div>
            <div id="top-row"></div>
            <!--Entries-->
            @foreach ($groceries as $grocery)
            <li class="entries"><strong>{{ UCWords($grocery->name) }}</strong></li>
            <li class="entries">{{UCWords($grocery->category->name)}}</li>
            <li class="entries">{{ $grocery->amount}}</li>
            <!-- TODO: als je zin hebt, kun je een accessor toevoegen aan je Grocery model, bijv. priceFormatted, die de geformatteerde prijs returnt. 
                 Zo wordt je code nog iets herbruikbaarder en zet je de business logic meer buiten te template --> -->
            <li class="entries">€{{ number_format($grocery->price, 2)}}</li>
            <li class="entries">€{{ number_format($grocery->price * $grocery->amount, 2)}}</li>
            <a class="entries" href="groceries/{{ $grocery->id }}/edit">Edit</a>
            <form class="entries" action="{{ route('groceries.destroy', $grocery) }}" method="POST">
                @csrf
                @method('DELETE')
                <button value="submit">Delete</button> 
            </form>
            @endforeach
            <!--Bottom Row-->
            <div id="bottom-row"></div>
            <div class="product" id="bottom-row"></div>
            <div class="prijs" id="bottom-row"></div>
            <div class="aantal" id="bottom-row">Total:</div>
            <!-- TODO: array_sum en number_format zou ik in de controller doen, zodat er zo min mogelijk code in de template wordt uitgevoerd -->
            <div class="subtotaal" id="bottom-row">€{{ number_format(array_sum($total), 2) }}</div>
            <div id="bottom-row"></div>
            <div id="bottom-row"></div>
        </section>
        <!-- TODO: goed dat je ook rekening houdt met lege scenarios! -->
        @else
        <a>You haven't created any groceries yet!</a>
        @endif
    </section>
</x-layout>