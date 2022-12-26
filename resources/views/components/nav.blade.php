    <nav class="flex justify-between px-4 pt-2 pb-2 border-b-[1px] border-black text-xs sm:text-xs md:text-sm lg:text-base xl:text-lg 2xl:text-xl">
        <a href="{{ route('pages.index') }}" @if(Route::currentRouteName() == 'pages.index')class="active"@endif title="">Strona główna</a>
        <a href="{{ route('products.index') }}" @if(Str::startsWith(Route::currentRouteName(), 'products'))class="active"@endif title="">Produkty</a>
        <a href="{{ route('pages.about') }}" @if(Route::currentRouteName() == 'pages.about')class="active"@endif title="">O firmie</a>        
        <a href="{{ route('pages.contacts.create') }}" @if(Route::currentRouteName() == 'pages.contacts.create')class="active"@endif title="">Kontakt</a>
@auth
        <a href="{{ url('/dashboard') }}">Konto</a>
@else
        <a href="{{ route('login') }}">Zaloguj</a>
        <a href="{{ route('register') }}">Załóż konto</a>
@endauth
    </nav>
