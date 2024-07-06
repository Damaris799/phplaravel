@extends('Layouts.app')

@section('content')
<h1>Eliminar grupo</h1>
<form action="{{route('grupos.destroy', $grupo->id) }}" method="POST">
    @csrf
    <div class="row"> 
        <div class="col-md-4">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="for-control" id="nombre"
            name="nombre" value="{{ $grupo->nombre }}" disabled>
 
        </div>
    </div>
    <div class="row"> 
        <div class="col-md-6">
            <label for="descripcion" class="form-label">descripcion</label>
             <textarea class="form-control" id="descripcion" 
             name="descripcion" disable>{{ $grupo->descripcion }}</textarea>
 
        </div>
    </div>
    <div class="row"> 
        <div class="col-md-12">
            <a href="{{ route('grupos.index') }}" class="btn btn-secondary">Retornar</a>
 
        </div>
    </div>
     </form>
@endsection