@extends('layouts/app')

@section('content')
    <div class="container">
        <div class="col-md-8 col-md-offset-2">
            <h1>Lista De Artículos</h1>

            @foreach ($posts as $post)
                <div class="panel panel-default">
                    <div class="panel-heading">
                        {{ $post->name }}
                    </div>

                    <div class="panel-body" style="margin-bottom:2%;">
                        @if ($post->file)
                            <img src="{{ $post->file }}" class="img-responsive">
                        @endif

                        {{ $post->excerpt }}

                        <a href="#" class="pull-right">Leer Más</a>
                    </div>
                </div>
            @endforeach

            <hr>

            {{ $posts->render() }}
        </div>
    </div>
@endsection