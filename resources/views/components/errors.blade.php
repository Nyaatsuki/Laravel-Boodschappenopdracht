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