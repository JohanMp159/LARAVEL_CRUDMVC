@extends('principal')

@section('contenido')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Categorias</h3> <br>
        <a href="{{ url('/categoria/crear')}}" class="btn btn-primary">Crear</a>
    </div>
    <div style="padding:20px">
        <form name="frmRegistrar" method="POST" action="{{ url('/categoria/guardar')}}">
            @csrf
            <div class="form-group">
                <label for="nombre">Nombre: </label>
                <input type="text" id="nombre" name="nombre">
            </div>
            <div class="form-group">
                <label for="nombre">descripción: </label>
                <input type="text" id="descripcion" name="descripcion">
            </div>
            <button type="submit" class="btn btn-primary">Registrar</button>
        </form>
    </div>
</div>
@endsection