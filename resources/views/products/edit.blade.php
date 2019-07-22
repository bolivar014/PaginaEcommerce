@extends('layouts.app')
    @section('content')
        <div class="container ">
            <h1>Editar Producto</h1>
            <!-- -->
            <form action="{{ url('/products/'.$product->id.'/update') }}" method="post">
                <div class="form-group">
                    <label for="">Título</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ $product->title }}"/>
                </div>
                <div class="form-group">
                    <label for="">Precio</label>
                    <input type="number" class="form-control" id="pricing" name="pricing" value="{{ $product->pricing }}"/>
                </div>
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="">Descripción</label>
                    <textarea cols="30" rows="10" class="form-control" name="description" id="description">{{ $product->description }}</textarea>
                </div>
                <div class="form-group text-right">
                    <a href="{{ url('/products') }}" class="btn btn-danger">Regresar Atrass...</a>
                    <input type="submit" value="Guardar" class="btn btn-success">
                
                </div>
            </form>
        </div>
    @endsection