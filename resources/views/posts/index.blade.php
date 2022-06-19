@extends('main' , ['title'=>'Posty'])

@include('posts.menu')

@section('content')
    <div class="container">
        <div class="row">
            @foreach($posts as $post)
                <div class="col s12 m4 l3">
                    <div class="card">
                        <div class="card-content">
                            <span class="card-title">{{$post->Title}}</span>
                            <blockquote>{{$post->ShortDescription}}</blockquote>
                            <a href="{{$post->Link}}">{{$post->Title}}</a>
                            <p>{!! $post->ContentHTML !!}</p>
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
