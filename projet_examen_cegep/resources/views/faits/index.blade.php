<x-layout titre="Liste des Faits" css="{{ asset('css/liste.css') }}">

    <x-header titrePage="Tous les faits" />

    {{-- Message de confirmaiton d'ajout d'un fait --}}
    @if (session('succes'))
        <p class="btn btn-success">
            {{ session('succes') }}
        </p>
    @endif

    <main>
        <div class="conteneur">
            @foreach ($faits as $fait)
                <div class="contenue-principal">
                    <div class="info">
                        <strong>FAIT #{{ $fait['id'] }}</strong> "{{ $fait['texte'] }}"
                    </div>
                    <div class="icons">
                        {{-- MODIFICATION --}}
                        <a href="{{ route('faits.edit', ["id" => $fait['id']]) }}">
                            <span class="material-icons">
                                edit
                            </span>
                        </a>

                        {{-- SUPPRESSION --}}
                        <form action="{{ route('faits.destroy') }}" method="POST" class="delete-form">
                            @csrf
                            <input type="hidden" name="id" value="{{ $fait['id'] }}">
                            <button type="submit" class="delete-button">
                                <span class="material-icons">
                                    delete
                                </span>
                            </button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </main>

    <x-footer />

</x-layout>
