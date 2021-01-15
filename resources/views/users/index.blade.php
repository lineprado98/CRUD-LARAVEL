
@extends('layouts.app')


@section('content')

    <h1>List Users</h1>

<div class="table-responsive">
    <table id="table" class="table table-bordered table-striped">
    <thead>
        <tr>
            <th scope="col">Cod.</th>
            <th scope="col">Name</th>
            <th scope="col">E-mail</th>
            <th scope="col">Address. Street</th>
             <th scope="col">Actions</th>

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
                        <th scope="col">{{isset($item->end->id)?$item->end->street:''}}</th>
                        <td>
                            <a href="{{route('edit', [$item->id])}}">
                                <button type="button" class="btn btn-primary btn-sm">Edit</button>
                            </a>

                            <a href="{{route('delete', [$item->id])}}">
                                <button type="button"  class="btn btn-danger btn-sm">Delete</button>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        @endif
    </table>
</div>


<script>
$(document).ready(function() {
    $('#table').DataTable();
} );
</script>

@endsection
