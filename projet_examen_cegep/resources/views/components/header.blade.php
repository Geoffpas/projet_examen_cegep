@props(['titrePage'])

<header>
    <h1>{{ $titrePage }}</h1>
    <nav>
        <a href="{{ route('accueil') }}">Accueil</a>
        <a href="{{ route('faits.index') }}">Liste</a>
        <a href="{{ route('faits.create') }}">Ajouter</a>
    </nav>
</header>
