
<head>
  <link rel="stylesheet" href="css/app.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
 </head>


@include('sidebar')

  <div class="container">
      <h1>Listar Usuários</h1>
  </div>

  <div class="container">

 <div class="table-responsive">
    <table id="example" class="table table-bordered table-striped">
    <thead>
        <tr>
            <th scope="col">Cod.</th>
            <th scope="col">Nome</th>
            <th scope="col">E-mail</th>
             <th scope="col">Ações</th>

        </tr>
    </thead>
    @if($usuarios)
    <tbody>
        @php($no=1)
        @foreach ($usuarios as $item)
       <tr>
            <th scope="col">{{$item->id}}</th>
            <th scope="col">{{$item->name}}</th>
            <th scope="col">{{$item->email}}</th>
          <td>
            <a  href="{{route('edit', [$item->id])}}">
                  <button type="button" class="btn btn-primary btn-sm">Editar</button>

            </a>


            <a  href="{{route('delete', [$item->id])}}">
                 <button type="button"  class="btn btn-danger btn-sm">Excluir</button>

            </a>

            {{-- {{route(‘tests.destroy’, [$e->id])}} --}}

        </td>

        </tr>
        @endforeach

    </tbody>
    @endif
</table>
</div>
  </div>

<script>
$(document).ready(function() {
    $('#example').DataTable();
} );
</script>


