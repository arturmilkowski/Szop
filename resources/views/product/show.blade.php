<x-layout>
    <x-slot:title>Produkt</x-slot>
    <x-main-content>
        <div>
            <h2>{{ $product->name }}</h2>
            <h3>{{ $product->category->name }} {{ $product->concentration->name }}</h3>
            <img src="{{ asset('storage/images/products') . '/' . $product->img }}" class="img" alt="{{ $product->name }}">
            <p>{!! $product->description !!}</p>
            <p><a href="{{ route('pages.index') }}" title="Powrót do strony głównej">Powrót do strony głównej</a></p>
            <p><a href="{{ route('products.index') }}" title="Powrót do strony produktów">Powrót do strony produktów</a></p>
@forelse ($product->types as $type)
@if ($type->description)
            <p>{{ $type->description }}</p>
@endif
@if ($type->quantity > 0)
            <form action="{{-- route('frontend.basket.store', [$type->id]) --}}" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <button type="submit">Do koszyka</button>
            </form>
@else
            <p>Brak w magazynie</p>
@endif
@empty
            <p>Brak produktów</p>
@endforelse
        </div>
    </x-main-content>
</x-layout>
