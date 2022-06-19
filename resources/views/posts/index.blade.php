@extends('main' , ['title'=>'Wszystkie posty'])

@include('posts.menu')

@section('content')
    <div class="container">
        <div class="row">
            @foreach($posts as $post)
                <div class="col s12 m6 l6">
                    <div class="card">
                        <div class="card-content">
                            <span class="card-title">{{$post->Title}}</span>
                            <blockquote>{{$post->ShortDescription}}</blockquote>
                            <a href="{{$post->Link}}">{{$post->Link}}</a>
                            <p>{!!$post->ContentHTML!!}</p>
                            <p>{{$post->MetaDescritpion}}</p>
                            <p>{{$post->MetaTags}}</p>
                            <p>{{$post->Notes}}</p>
                            @if ($post->IsPublic)
                                <p>✔️ Post publiczny</p>
                            @else
                                <p>❌ Post niepubliczny</p>
                            @endif
                        </div>
                        <div class="card-action">
                            <a href="/posts/edit/{{$post->Id}}" class="btn-floating btn-small waves-effect waves-teal">
                                <i class="material-icons">edit</i>
                            </a>
                            <a href="{{url()->current()}}/delete/{{$post->Id}}" class="btn-floating btn-small waves-effect waves-teal red">
                                <i class="material-icons">delete</i>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
