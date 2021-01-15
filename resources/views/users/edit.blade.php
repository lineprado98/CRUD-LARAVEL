

@extends('layouts.app')

@section('content')
    <h1>Edit User</h1>
    <form href=" "action="{{route('update', [$user->id])}}" method="POST">
         @method('PUT')

        @csrf
        <div class="form-group">

        <label for="exampleInputEmail1">Name</label>
        <input type="nome" class="form-control" id="nome" name="nome" value="{{isset($user)?$user->name:''}}" placeholder="Informe seu nome">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control mx-sm-3 mb-2" id="email" name="email" value="{{isset($user)?$user->email:''}}" placeholder="informe seu email">

        </div>

        <div class="btn-group pull-right">
            <div class="form-group">
                <a href="{{route('list')}}">
                    <button type="submit" class="btn btn-danger">Cancel</button>
                </a>
            <button type="submit" class="btn btn-success">Save</button>
            </div>
        </div>

    </form>

@endsection
