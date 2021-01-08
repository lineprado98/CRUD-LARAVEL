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
  <div class="container">
    <div class="dropdown">
    <a class="btn btn-secondary btn-lg"   href='{{ route('/') }}' aria-disabled="true"role="button" aria-pressed="true">Home</a>

    <a class="btn btn-secondary btn-lg"   href='{{ route('list') }}' aria-disabled="true"role="button" aria-pressed="true">Usuários</a>
    <a class="btn btn-secondary btn-lg"   href='{{ route('create') }}' aria-disabled="true"role="button" aria-pressed="true"> Novo Usuário</a>
    </div>


