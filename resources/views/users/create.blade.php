
@extends('layouts.app')



@section('content')
@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
        <h1>Create user</h1>
        <form action="/users/create" method="POST">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                <input type="nome" class="@error('name') is-invalid @enderror form-control" id="name" name="name"  placeholder="Name">
                @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="@error('email') is-invalid @enderror form-control mx-sm-3 mb-2" id="email" name="email"  placeholder="E-mail Address">
                @error('email')
                <div class="alert alert-danger">
                   {{ $message }}
                </div>
                @enderror
                  <label >cpf</label>
                <input type="text"  class="form-control mx-sm-3 mb-2 cpf" id="cpf" name="cpf" placeholder="000.000.000-00" >
                 @error('cpf')
                <div class="alert alert-danger">
                   {{ $message }}
                </div>
                @enderror


            </div>

            <div class="btn-group pull-right">
                <button type="submit" class="btn btn-success">Criar</button>
            </div>

        </form>


@endsection
