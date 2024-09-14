@extends('templates.master')

@section('title', 'Crear Mascota')

@push('styles')
<style>
    body {
        background: linear-gradient(#ffcbe9, #FF5EC0);
        background-position: absolute;
        background-size: cover;
        background-repeat: no-repeat;
        min-height: 100vh;
    }
</style>
@endpush

@section('content')
<div class="container">
    <div class="row">

        {{-- Formulario para crear una nueva mascota --}}
        <div class="col-12 mb-3 p-3 border rounded" style="background: linear-gradient(rgb(253, 215, 237),#F9CEE7)">

            <div class="mb-3">
                <h3>Crear una nueva mascota</h3>
            </div>

            <form action="{{route('mascotas.store')}}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-12 col-md-6 mb-2">
                        <label class="form-label" for="cliente_id">Dueño de la mascota</label>
                        <select class="form-select" id="cliente_id" name="cliente_id" required>
                            <option value="" selected>Seleccione al dueño de la mascota</option>
                            @foreach($clientes as $cliente)
                            <option value="{{$cliente->rut}}">{{$cliente->rut}}:{{$cliente->nombre}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-12 col-md-6 mb-2">
                        <label class="form-label" for="nombreInput">Nombre de la mascota</label>
                        <input class="form-control" id="nombreInput" type="text" name="nombre" required>
                    </div>

                    <div class="col-12 mb-2">
                        <label class="form-label" for="razaInput">Raza</label>
                        <input class="form-control" id="razaInput" type="text" name="raza" required>
                    </div>

                    <div class="col-12 mb-2">
                        <label class="form-label" for="sexoInput">Sexo</label>
                        <select class="form-select" id="sexoInput" name="sexo" required>
                            <option selected>Seleccione el sexo</option>
                            <option value="M">Macho</option>
                            <option value="H">Hembra</option>
                        </select>
                    </div>

                    <div class="col-12 mb-2">
                        <label class="form-label" for="colorInput">Color</label>
                        <input class="form-control" id="colorInput" type="text" name="color" required>
                    </div>

                    <div class="col-12 mb-2">
                        <label class="form-label" for="pesoInput">Peso</label>
                        <input class="form-control" id="pesoInput" type="number" name="peso" step="0.01" required>
                    </div>

                    <div class="col-12 mb-2">
                        <label class="form-label" for="fecha_nacimientoInput">Fecha de nacimiento</label>
                        <input class="form-control" id="fecha_nacimientoInput" type="date" name="fecha_nacimiento" required>
                    </div>

                    <div class="col-12 mb-2">
                        <button type="submit" class="btn btn-primary">Crear Mascota</button>
                    </div>
                </div>
            </form>
        </div>
        {{-- /Formulario para crear una nueva mascota --}}
        
    </div>
</div>
@endsection

@push('scripts')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
@endpush
