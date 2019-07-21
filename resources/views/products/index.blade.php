@extends('layouts.app')

    @section('content')
        <div class="big-padding text-center blue-grey white-text">
            <h1>Productos</h1>
        </div>
        <div class="container">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <td>ID</td>
                        <td>Título</td>
                        <td>Descripción</td>
                        <td>Precio</td>
                        <td>Opciones...</td>
                    </tr>    
                </thead>
                <tbody>
                    @foreach($products as $product)
                        <tr>
                            <td>{{ $product->id }}</td>
                            <td>{{ $product->title }}</td>
                            <td>{{ $product->description }}</td>
                            <td>{{ $product->pricing }}</td>
                            <td>
                                <a href="{{ url('/products/'.$product->id.'/edit')}}" class="btn btn-info">Editar</a>
                                <a href="{{ url('/products/'.$product->id.'/destroy')}}" class="btn btn-danger">Eliminar</a>
                                <a href="{{ url('/products/'.$product->id.'/show')}}" class="btn btn-success">Vér</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="floating" style="position:fixed; bottom: 2em; right: 2em; z-index: 100; background: #28B280; border-radius: 100px;">
            <a href="{{ url('/products/create') }}" class="btn btn-primary btn-fab">
                <i class="material-icons">add</i>
            </a>
        </div>
    @endsection