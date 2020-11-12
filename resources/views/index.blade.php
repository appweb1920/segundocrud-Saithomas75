@extends('layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Refaccionaria</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="/Ingresar"> Ingresar Pieza</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>Cantidad</th>
            <th>Costo</th>
            <th width="280px">Editar</th>
        </tr>
        @if(!is_null($pieza))
            @foreach ($pieza as $p)
            <tr>
                <td>{{ $p->nombre }}</td>
                <td>{{ $p->descripcion }}</td>
                <td>{{ $p->cantidad }}</td>
                <td>$ {{$p->costo }}</td>
                <td>
                    <a class="btn btn-primary" href="/Editar/{{$p->id}}">Editar</a>
                    <a class="btn btn-danger" href="/Eliminar/{{$p->id}}">Eliminar</a>
                </td>
            </tr>
            @endforeach
        @endif
    </table>
      
@endsection