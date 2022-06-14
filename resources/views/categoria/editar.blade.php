@extends('principal')

@section('contenido')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Categorias</h3> <br>
        <a href="{{ url('/categoria/crear')}}" class="btn btn-primary">Editar</a>
    </div>
    <div style="padding:20px">
        <form name="frmRegistrar" method="POST" action="{{ url('/categoria/actualizar',$categoria->id)}}">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nombre">Nombre: </label>
                <input type="text" id="nombre" name="nombre" value="{{ $categoria->nombre}}" style="width:80%">
            </div>
            <div class="form-group">
                <label for="nombre">descripción: </label>
                <input type="text" id="descripcion" name="descripcion" value="{{ $categoria->descripcion}}" style="width:80%">
            </div>
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
    </div>
</div>
@endsection