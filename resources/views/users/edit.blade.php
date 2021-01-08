<head>
  <link rel="stylesheet" href="css/app.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />

  <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
 </head>

    @include('sidebar')
    <div class="container">
    <h1>Criar Usuário </h1>
    <form href=" "action="{{route('update', [$user->id])}}" method="POST">
         @method('PUT')

    @csrf
    <div class="form-group">
    <label for="exampleInputEmail1">Nome</label>
    <input type="nome" class="form-control" id="nome" name="nome" value="{{isset($user)?$user->name:''}}" placeholder="Informe seu nome">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control mx-sm-3 mb-2" id="email" name="email" value="{{isset($user)?$user->email:''}}" placeholder="informe seu email">

  </div>


    <div class="btn-group pull-right">
          <div class="form-group">
                <a  href="{{route('list')}}">
                  <button type="submit" class="btn btn-danger">Cancelar</button>

            </a>

          <button type="submit" class="btn btn-success">Salvar</button>
    </div>
 </div>

</form>
</div>
