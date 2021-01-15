<!DOCTYPE html>
<html lang="pt-br">
<head>

     <meta charset="utf-8">


        <title> Laravel</title>
        <meta name="description" content ="CRUD-LARAVEL"/>
        <meta name ="autor" content="balde"/>
        <meta name="keywords" content="laravel, blade" />    {{-- palavras chave do crud --}}
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  {{-- grafico --}}
  {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script> --}}

 {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js" type="text/javascript"></script> --}}


{{-- <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script> --}}
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
<script type="text/javascript" src="jscript/graph.js"></script>

</head>
<body>
 @include('components.menu')
<div class="container">
            <div class="painel">
                @yield('content')
            </div>
</div>

</body>

