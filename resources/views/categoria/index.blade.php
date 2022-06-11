@extends('principal')

@section('contenido')
<div class="card">
        <div class="card-header">
          <h3 class="card-title">Categorias</h3> <br>
          <a href="{{ url('/categoria/crear')}}">Crear</a>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body p-0">
          <table class="table table-striped projects">
              <thead>
                  <tr>
                      <th style="width: 2%">
                          ID: 
                      </th>
                      <th style="width: 20%">
                          Nombre
                      </th>
                      <th style="width: 30%">
                          Descripcion
                      </th>
                      <th style="width: 20%" >
                          Acciones
                      </th>
                  </tr>
              </thead>
        <tbody>
            @foreach($categorias as $categoria)
            <tr>
                <td>{{ $categoria->id }}</td>
                <td>{{ $categoria->nombre }}</td>
                <td>{{ $categoria->descripcion }}</td>
                <td class="project-actions text-right">
                          <a class="btn btn-info btn-sm" href="{{url ('/categoria/editar', $categoria->id )}}">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Editar
                          </a>
                          <a class="btn btn-danger btn-sm" href="{{url ('/categoria/eliminar')}}">
                              <i class="fas fa-trash">
                              </i>
                              Eliminar
                          </a>
                      </td>
            </tr>
            @endforeach
        </tbody>

</table>
@endsection