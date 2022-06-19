@extends('main', ['title'=>'Nowy post'])

@include('posts.menu')

@section('content')
    <div class="container">
        <div class="row">
            <form class="col s12 validator-submit" method="post" action="/posts/create">
                {{-- zabezpieczenie przed Cross-site request forgeries --}}
                @csrf
                <div class="input-field col s4">
                    <i class="material-icons prefix">input</i>
                    {{-- clasa validatro-required jest potrzebna do wywoływania walidacji z pliku validator.js --}}
                    <input id="tytul" type="text" name="Title" class="validate validator-required">
                    <label for="tytul">Tytuł</label>
                    <span class="helper-text" id="tytul-helper"></span>
                </div>
                <div class="input-field col s4">
                    <i class="material-icons prefix">insert_link</i>
                    <input id="link" type="text" name="Link" class="validate validator-required">
                    <label for="link">Link</label>
                    <span class="helper-text" id="link-helper"></span>
                </div>
                <div class="input-field col s12">
                    <textarea id="textarea1" class="materialize-textarea validate validator-required" name="ShortDescription"></textarea>
                    <label for="textarea1">Krótki opis</label>
                    <span class="helper-text" id="textarea1-helper"></span>
                </div>
                <div class="input-field col s12">
                    <textarea id="textarea2" class="materialize-textarea validate validator-required" name="ContentHTML"></textarea>
                    <label for="textarea2">Treść listu</label>
                    <span class="helper-text" id="textarea2-helper"></span>
                </div>
                <div class="input-field col s12">
                    <textarea id="textarea3" class="materialize-textarea" name="MetaDescription"></textarea>
                    <label for="textarea3">Opis meta</label>
                    <span class="helper-text" id="textarea3-helper"></span>
                </div>
                <div class="input-field col s12">
                    <textarea id="textarea4" class="materialize-textarea" name="MetaTags"></textarea>
                    <label for="textarea4">Tagi meta</label>
                    <span class="helper-text" id="textarea4-helper"></span>
                </div>
                <div class="input-field col s12">
                    <textarea id="textarea5" class="materialize-textarea" name="Notes"></textarea>
                    <label for="textarea5">Notes</label>
                    <span class="helper-text" id="textarea5-helper"></span>
                </div>
                <div class="input col s12">
                    <label>
                        <input type="checkbox" name="is-public" class="filled-in"/>
                        <span>Czy opublikowany</span>
                    </label>
                </div>
                <div class="col s12" style="margin-top: 20px">
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

@section('scripts')
    <script src="/js/validator.js"></script>
@endsection
