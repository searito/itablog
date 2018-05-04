@extends('layouts/app')

@section('content')
    <div class="container">
        <div class="col-md-8 col-md-offset-2">
            <h1>Lista De Artículos</h1>

            @foreach ($posts as $post)
                <div class="card">
                    <div class="card-header">
                        {{ $post->name }}
                    </div>

                    @if ($post->file)
                        <img src="{{ $post->file }}" class="card-img-top">
                    @endif

                    <div class="card-body">
                        {{ $post->excerpt }}
                        
                        <div class="row" style="margin-top:3%; margin-left:0%;">
                            <a href="{{ route('post', $post->slug) }}" class="btn btn-outline-primary">Leer Más</a>
                        </div>
                    </div>
                </div>
            @endforeach

            <hr>

            {{ $posts->render() }}
        </div>
    </div>
@endsection