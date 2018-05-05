@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-sm-10">
                                Módulo De Etiquetas
                            </div>

                            <div class="col-sm-2">
                                <a href="{{ route('tags.create') }}" class="btn btn-sm btn-primary btn-block">
                                    Crear
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover table-striped">
                                <thead class="thead-dark">
                                    <tr>
                                        <th width="10px">ID</th>
                                        <th>Nombre</th>
                                        <th colspan="3">&nbsp;</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($tags as $t)
                                        <tr>
                                            <td>{{ $t->id }}</td>
                                            <td>{{ $t->name }}</td>
                                            <td width="10px">
                                                <a href="{{ route('tags.show', $t->id) }}" class="btn btn-sm btn-success">
                                                    Ver
                                                </a>
                                            </td>
                                            <td width="10px">
                                                <a href="{{ route('tags.edit', $t->id) }}" class="btn btn-sm btn-warning">
                                                    Editar
                                                </a>
                                            </td>
                                            <td width="10px">
                                                {!! Form::open(['route' => ['tags.destroy', $t->id], 'method' => 'DELETE']) !!}
                                                    <button class="btn btn-sm btn-danger">
                                                        Eliminar
                                                    </button>
                                                {!! Form::close() !!}
                                                 
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        {{ $tags->render() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection