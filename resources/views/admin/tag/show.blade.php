@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="card">
                    <div class="card-header">
                        Ver Etiqueta
                    </div>

                    <div class="card-body">
                        <p>
                            <b>Nombre:</b> {{ $tag->name }}
                        </p>

                        <p>
                            <b>Slug:</b> {{ $tag->slug }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection