

<head>
 <meta charset="utf-">
        <title> template maior </title>
        <meta name="description" content ="CRUD-LARAVEL"/>
        <meta name ="autor" content="balde"/>
        <meta name="keywords" content="laravel, blade" />    {{-- palavras chave do crud --}}
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />

</head>

    <nav id="principal">
        <ul>
            <li>
                <a href='{{ route('home') }}'>
                    <i class=""></i>
                    <h3>Home</h3>
                </a>
            </li>
             <li>
                <a   href='{{ route('list') }}' >
                   <h3>Users</h3>
                   <i class="fas fa-address-book" aria-hidden="true"></i>

                </a>
            </li>
            <li>
                <a   href='{{ route('create') }}' >
                   <h3>Create </h3>
                   <i class="fa fa-address-book" aria-hidden="true"></i>

                </a>
            </li>
             <li>
                <a   href='{{ route('create') }}' >
                   <h3>Import</h3>
                   <i class="fa fa-address-book" aria-hidden="true"></i>

                </a>
            </li>



        </ul>
    </nav>




