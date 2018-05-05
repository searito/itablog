@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-sm-10">
                                Módulo Entradas
                            </div>

                            <div class="col-sm-2">
                                <a href="{{ route('posts.create') }}" class="btn btn-sm btn-primary btn-block">
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
                                    @foreach ($posts as $pst)
                                        <tr>
                                            <td>{{ $pst->id }}</td>
                                            <td>{{ $pst->name }}</td>
                                            <td width="10px">
                                                <a href="{{ route('posts.show', $pst->id) }}" class="btn btn-sm btn-success">
                                                    Ver
                                                </a>
                                            </td>
                                            <td width="10px">
                                                <a href="{{ route('posts.edit', $pst->id) }}" class="btn btn-sm btn-warning">
                                                    Editar
                                                </a>
                                            </td>
                                            <td width="10px">
                                                {!! Form::open(['route' => ['posts.destroy', $pst->id], 'method' => 'DELETE']) !!}
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
                        {{ $posts->render() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection