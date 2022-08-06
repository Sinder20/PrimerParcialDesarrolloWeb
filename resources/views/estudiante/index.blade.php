@extends ('layout.plantilla')
@section('content')


    <table class="table">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellido</th>
            <th scope="col">Telefono</th>
            <th scope="col">Edad</th>
            <th scope="col">Direccion</th>
            <th scope="col">Categoria</th>
        </tr>
        </thead>
        <tbody>
        @foreach($estudiantes as $variable)
            <tr>
                <th scope="row">{{$variable->id}}</th>
                <td>{{$variable->nombre}}</td>
                <td>{{$variable->apellido}}</td>
                <td>{{$variable->telefono}}</td>
                <td>{{$variable->edad}}</td>
                <td>{{$variable->direccion}}</td>
                <td>{{$variable->id_categoria}}</td>
            </tr>
        @endforeach

