@extends('Layouts.app')

@section('content')
<form action="{{route('grupos.store') }}" method="POST">
    @csrf
    <div class="row"> 
        <div class="col-md-4">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="for-control" id="nombre" name="nombre" require>
 
        </div>
    </div>
    <div class="row"> 
        <div class="col-md-6">
            <label for="descripcion" class="form-label">descripcion</label>
             <textarea class="form-control" id="descripcion" name="descripcion"></textarea>
 
        </div>
    </div>
    <div class="row"> 
        <div class="col-md-12">
            <button type="submit" class="btn btn-primary">Crear</button>
            <a href="{{ route('grupos.index') }}" class="btn btn-secondary">Cancelar</a>
 
        </div>
    </div>
     </form>
@endsection