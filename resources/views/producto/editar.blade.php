@extends('principal')

@section('contenido')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Productos</h3> <br>
        <a href="{{ url('/producto/crear')}}" class="btn btn-primary">Editar</a>
    </div>
    <div style="padding:20px">
        <form name="frmRegistrar" method="POST" action="{{ url('/producto/actualizar',$producto->id)}}">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="codigo">Código: </label>
                <input type="text" id="codigo" name="codigo" value="{{ $producto->codigo}}" style="width:80%">
            </div>
            <div class="form-group">
                <label for="nombre">Nombre: </label>
                <input type="text" id="nombre" name="nombre" value="{{ $producto->nombre}}" style="width:80%">
            </div>
            <div class="form-group">
                <label for="precio">Precio: </label>
                <input type="text" id="precio" name="precio" value="{{ $producto->precio}}" style="width:80%">
            </div>
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
    </div>
</div>
@endsection