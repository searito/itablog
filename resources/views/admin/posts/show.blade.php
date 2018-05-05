@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="card">
                    <div class="card-header">
                        Ver Post
                    </div>

                    <div class="card-body">
                        <p>
                            <b>Nombre:</b> {{ $post->name }}
                        </p>

                        <p>
                            <b>Slug:</b> {{ $post->slug }}
                        </p>

                        <p class="text-justify">
                            <b>Contenido:</b> {{ $post->body }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection