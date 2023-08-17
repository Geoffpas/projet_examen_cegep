@props(['action'])

{{-- FORMULAIRE --}}
<form action="{{ $action }}" method="POST">
    @csrf

    <div>
        {{-- Texte --}}
        <label for="texte"> Fait# </label>
        <div>
            <textarea id="texte" name="texte" rows="4" cols="100" placeholder="Ajoutez un fait!" autofocus></textarea>
        </div>
    </div>

    {{-- SUBMIT --}}
    <div>
        <input class="submit" type="submit" value="Ajouter!" />
    </div>
</form>
