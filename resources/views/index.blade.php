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
        @foreach ($pieza as $p)
        <tr>
            <td>{{ $p->nombre }}</td>
            <td>{{ $p->descripcion }}</td>
            <td>{{ $p->cantidad }}</td>
            <td>${{ $p->costo }}</td>
            <td>
                <form action="#" method="POST">
   
                    <a class="btn btn-info" href="#">Mostrar</a>
    
                    <a class="btn btn-primary" href="/Editar/{{$p->id}}">Editar</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
      
@endsection