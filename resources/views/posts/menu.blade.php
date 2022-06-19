{{-- menu wydzielone do oddzielnego pliki i importowane za pomocą @include --}}
@section('menu')
    <div class="col s12">
        <a href="/" class="btn waves-effect waves-light">Home
            <i class="material-icons right">home</i>
        </a>
        <a href="/posts/new" class="btn waves-effect waves-light">Nowy post
            <i class="material-icons right">add</i>
        </a>
        <a href="/posts" class="btn waves-effect waves-light">Wszystkie posty
            <i class="material-icons right">list</i>
        </a>
    </div>
@endsection
