@extends('main')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col s12 m6 l6">
                <a href="/posts">
                    <div class="card-panel hoverable center">
                        <h5>Wszystkie posty</h5>
                    </div>
                </a>
            </div>
            <div class="col s12 m6 l6">
                <a href="/posts/new">
                    <div class="card-panel hoverable center">
                        <h5>Nowy post</h5>
                    </div>
                </a>
            </div>
        </div>
    </div>
@endsection
