<x-layout>
    <x-slot:title>Kontakt</x-slot>
    <x-main-content>    
        <h2>Kontakt</h2>
        <form action="{{ route('pages.contacts.store') }}" method="POST">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div>
                <label for="topic">Temat</label>
                <input type="text" name="topic" id="topic" placeholder="Temat wiadomości" />
            </div>
            <div>
                <label for="content">Treść</label>
                <textarea name="content" id="content" placeholder="Treść wiadomości"></textarea>
            </div>
            <div>
                <label for="author">Podpis</label>
                <input type="text" name="author" id="author" placeholder="Podpis" />
            </div>
            <div><button type="submit">Wyślij</button></div>
        </form>
    </x-main-content>
</x-layout>
