@extends('main')

@section('menu')
<div class="col s12">
    <a href="/wydarzenia-wewnetrzne/nowy" class="btn waves-effect waves-light">Nowy
        <i class="material-icons right">add</i>
    </a>
    <a href="/wydarzenia-wewnetrzne" class="btn waves-effect waves-light">Wszystkie
        <i class="material-icons right">list</i>
    </a>
</div>
@endsection

@section('content')
<div class="container">
    <div class="row">
        <form class="col s12" method="post" action="/wydarzenia-wewnetrzne/dodawanie">
            @csrf
            <div class="input-field col s4">
                <i class="material-icons prefix">input</i>
                <input id="nazwa" type="text" name="Title" class="validate">
                <label for="nazwa">Nazwa</label>
            </div>
            <div class="input-field col s4">
                <i class="material-icons prefix">insert_link</i>
                <input id="link" type="text" name="Link" class="validate">
                <label for="link">Link</label>
            </div>
            <div class="input-field col s12">
                <textarea id="textarea1" class="materialize-textarea" name="ShortDescription"></textarea>
                <label for="textarea1">Krótki opis</label>
            </div>
            <div class="input-field col s12">
                <textarea id="textarea2" class="materialize-textarea" name="ContentHTML"></textarea>
                <label for="textarea2">Zawartość</label>
            </div>

            <div class="col s12">
                <div class="submit-field input-field">
                    <button class="btn waves-effect waves-light" type="submit">Dodaj
                        <i class="material-icons right">add</i>
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection