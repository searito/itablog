@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-sm-10">
                                Módulo Categorías
                            </div>

                            <div class="col-sm-2">
                                <a href="{{ route('categories.create') }}" class="btn btn-sm btn-primary btn-block">
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
                                    @foreach ($categories as $cat)
                                        <tr>
                                            <td>{{ $cat->id }}</td>
                                            <td>{{ $cat->name }}</td>
                                            <td width="10px">
                                                <a href="{{ route('categories.show', $cat->id) }}" class="btn btn-sm btn-success">
                                                    Ver
                                                </a>
                                            </td>
                                            <td width="10px">
                                                <a href="{{ route('categories.edit', $cat->id) }}" class="btn btn-sm btn-warning">
                                                    Editar
                                                </a>
                                            </td>
                                            <td width="10px">
                                                {!! Form::open(['route' => ['categories.destroy', $cat->id], 'method' => 'DELETE']) !!}
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
                        {{ $categories->render() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection