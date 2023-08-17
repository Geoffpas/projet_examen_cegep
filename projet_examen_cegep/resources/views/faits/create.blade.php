<x-layout titre="Ajoutez un fait" css="{{ asset('css/create.css') }}">

    <x-header titrePage="Ajoutez un fait" />

    <main>
        <x-form.formCreate action="{{ route('faits.store') }}" />
    </main>

    <x-footer />

</x-layout>
