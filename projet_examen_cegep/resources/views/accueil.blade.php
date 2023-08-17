<x-layout titre="Accueil" css="{{ asset('css/accueil.css') }}">

    <x-header titrePage="Cats Facts" />

    <main>
        <div class="fait">
            <h2>Fait# {{ $fait->id }}</h2>
            <p>{{ $fait->texte }}</p>
        </div>

        <div>
            @for ($i = 0; $i <= 3; $i++)
                <img src="http://placekitten.com/200/200?image={{ rand(1, 16) }}" alt="Image aléatoire de chat 1">
            @endfor
        </div>
    </main>

    <x-footer />


</x-layout>
