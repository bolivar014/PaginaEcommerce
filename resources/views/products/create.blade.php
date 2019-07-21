@extends('layouts.app')
    @section('content')
        <div class="container ">
            <h1>Nuevo Producto</h1>
            <!-- -->
            <form action="{{ url('/products/store') }}" method="post">
                <div class="form-group">
                    <label for="">Título</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Digite el titulo...">
                </div>
                <div class="form-group">
                    <label for="">Precio</label>
                    <input type="number" class="form-control" id="pricing" name="pricing" placeholder="Digite el precio...">
                </div>
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="">Descripción</label>
                    <textarea cols="30" rows="10" class="form-control" placeholder="Descripción Del Producto..." name="description" id="description"></textarea>
                </div>
                <div class="form-group text-right">
                    <a href="{{ url('/products') }}" class="btn btn-danger">Regresar Atras...</a>
                    <input type="submit" value="Guardar" class="btn btn-success">
                
                </div>
            </form>
        </div>
    @endsection