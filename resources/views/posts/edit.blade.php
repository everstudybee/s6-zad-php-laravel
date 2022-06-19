@extends('main', ['title'=>'Edycja postu'])

@include('posts.menu')

@section('content')
    <div class="container">
        <div class="row">
            <form class="col s12" method="post" action="/posts/update/{{$post->Id}}">
                @csrf
                <div class="input-field col s6">
                    <i class="material-icons prefix">input</i>
                    <input id="tytul" type="text" name="Title" value="{{$post->Title}}" class="validate validator-required">
                    <label for="tytul">Tytuł</label>
                    <span class="helper-text" id="tytul-helper"></span>
                </div>
                <div class="input-field col s6">
                    <i class="material-icons prefix">insert_link</i>
                    <input id="link" type="text" name="Link" value="{{$post->Link}}" class="validate validator-required">
                    <label for="link">Link</label>
                    <span class="helper-text" id="link-helper"></span>
                </div>
                <div class="input-field col s12">
                    <textarea id="textarea1" class="materialize-textarea validate validator-required" name="ShortDescription">{{$post->ShortDescription}}</textarea>
                    <label for="textarea1">Krótki opis</label>
                    <span class="helper-text" id="textarea1-helper"></span>
                </div>
                <div class="input-field col s12">
                    <textarea id="textarea2" class="materialize-textarea validate validator-required" name="ContentHTML">{{$post->ContentHTML}}</textarea>
                    <label for="textarea2">Treść listu</label>
                    <span class="helper-text" id="textarea2-helper"></span>
                </div>
                <div class="input-field col s12">
                    <textarea id="textarea3" class="materialize-textarea" name="MetaDescription">{{$post->MetaDescription}}</textarea>
                    <label for="textarea3">Opis meta</label>
                    <span class="helper-text" id="textarea3-helper"></span>
                </div>
                <div class="input-field col s12">
                    <textarea id="textarea4" class="materialize-textarea" name="MetaTags">{{$post->MetaTags}}</textarea>
                    <label for="textarea4">Tagi meta</label>
                    <span class="helper-text" id="textarea4-helper"></span>
                </div>
                <div class="input-field col s12">
                    <textarea id="textarea5" class="materialize-textarea" name="Notes">{{$post->Notes}}</textarea>
                    <label for="textarea5">Notes</label>
                    <span class="helper-text" id="textarea5-helper"></span>
                </div>
                <div class="input col s12">
                    <label>
                        <input type="checkbox" name="is-public" class="filled-in" {{$post->IsPublic?'checked="checked"':''}}/>
                        <span>Czy opublikowany</span>
                    </label>
                </div>
                <div class="col s12" style="margin-top: 20px">
                    <div class="submit-field input-field">
                        <button class="btn waves-effect waves-light" type="submit">Zapisz
                            <i class="material-icons right">edit</i>
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
