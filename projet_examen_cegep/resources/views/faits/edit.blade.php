<x-layout titre="Modifiez un fait" css="{{ asset('css/create.css') }}">

    <x-header titrePage="Modifiez un fait" />

    {{-- FORMULAIRE --}}
    <form action="{{ route('faits.update')}}" method="POST">
        @csrf

        <div>
            {{-- Texte --}}
            <label for="texte"> Fait# </label>
            <div>
                <textarea id="texte" name="texte" rows="4" cols="100" placeholder="Modifiez un fait!" autofocus>{{ $fait->texte }}</textarea>
            </div>
        </div>

        <input type="hidden" name="id" value="{{ $fait->id }}">

        {{-- SUBMIT --}}
        <div>
            <input class="submit" type="submit" value="Modifier!" />
        </div>
    </form>

    <x-footer />

</x-layout>
