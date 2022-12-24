    <nav class="flex justify-between px-4 pb-2 border-b-[1px] border-black">
        <a href="{{ route('pages.index') }}" @if(Route::currentRouteName() == 'pages.index')class="active"@endif title="">Strona główna</a>    
        <a href="{{ route('pages.about') }}" @if(Route::currentRouteName() == 'pages.about')class="active"@endif title="">O firmie</a>
        <a href="{{ route('pages.contacts.create') }}" @if(Route::currentRouteName() == 'pages.contacts.create')class="active"@endif title="">Kontakt</a>
@auth
        <a href="{{ url('/dashboard') }}">Konto</a>
@else
        <a href="{{ route('login') }}">Zaloguj</a>
        <a href="{{ route('register') }}">Załóż konto</a>
@endauth
    </nav>
