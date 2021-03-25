@extends('layout')
@section('content')
    <div class="container">
        
        <a href="{{url('crear')}}" class="btn btn-primary">CREAR</a>


<table class="table table-dark table-striped mt-4">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Código</th>
      <th scope="col">Descripción</th>
      <th scope="col">Cantidad</th>
      <th scope="col">Precio</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>    
    @forelse ($productos as $producto)
    <tr>
        <td>{!!$producto->id!!}</td>
        <td>{!!$producto->codigo!!}</td>
        <td>{!!$producto->descripcion!!}</td>
        <td>{!!$producto->cantidad!!}</td>
        <td>{!!$producto->precio!!}</td>
        <td>
         <form action="{{ url("productos/{$producto->id}") }}" method="POST">
            <a href="{{route('productos.edit', ['id' => $producto->id]) }}" class="btn btn-info">Editar</a>
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-danger">Delete</button>
         </form>          
        </td>        
    </tr>
    @empty 
      <p>No hay refistros <a href="/agregar">Agregar</a> </p>
    @endforelse
  </tbody>
</table>

    </div>
    </div>
    @endsection
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-popRpmFF9JQgExhfw5tZT4I9/CI5e2QcuUZPOVXb1m7qUmeR2b50u+YFEYe1wgzy" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper.js and Bootstrap JS
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-t6I8D5dJmMXjCsRLhSzCltuhNZg6P10kE0m0nAncLUjH6GeYLhRU1zfLoW3QNQDF" crossorigin="anonymous"></script>
    -->
  </body>
</html>