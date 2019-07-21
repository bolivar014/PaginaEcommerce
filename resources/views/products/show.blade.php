@extends('layouts.app')
    @section('content')
        <div class="container text-center">
            <div class="card product text-left" style="width:600px; max-width:100%; padding: 1em; position: relative; margin: auto;">
                @if(Auth::check() && $product->user_id == Auth::user()->id)
                    <div class="absolute" style="position: absolute; right: 1em; top: 10px;">
                        <a href="{{ url('/products/'.$product->id.'/edit')}}" class="btn btn-info">Editar</a>
                        <a href="{{ url('/products/'.$product->id.'/destroy')}}" class="btn btn-danger">Eliminar</a>
                    </div>
                @endif
                <h1 style="padding-bottom: 10px; border-bottom: solid 1px;">{{ $product->title }}</h1>
                <div class="row">
                    <div class="col-sm-6 col-xs-12">
                    </div>
                    <div class="col-sm-6 col-xs-12">
                        <p>
                            <strong>Descripción:</strong>
                        </p>
                        <p>
                            {{ $product->description }}
                        </p>
                        <p>
                            <a href="#" class="btn btn-success">Agregar Producto</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    @endsection