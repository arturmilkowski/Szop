<x-layout>
    <x-slot:title>Produkty</x-slot>
    <x-main-content>
        <h2>Produkty</h2>
@forelse ($products as $product)
        <div>
            <h3><a href="{{ route('products.show', $product) }}" title="{{ $product->name }}">{{ $product->name }}</a></h3>
            {{-- <a href="{{ route('products.show', $product) }}" title="{{ $product->name }}">
                <img src="{{ asset('storage/images/products') . '/' . $product->img }}" class="img" alt="{{ $product->name }}">
            </a> --}}
            <h4>{{ $product->category->name }} {{ $product->concentration->name }}</h4>
            <p>{!! $product->description !!}</p>
            <p><a href="{{ route('products.show', $product) }}" title="{{ $product->name }}">Pokaż</a></p>
        </div>
@empty
        <p>Brak produktów</p>
@endforelse
    </x-main-content>
</x-layout>
