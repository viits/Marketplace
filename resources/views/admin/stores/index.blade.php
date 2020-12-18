@extends('layouts.app')

@section('content')

<a href="{{route('admin.stores.create')}}" class="btn btn-lg btn-success">Criar uma loja</a>


<table class="table table-striped">
    <thead>
        <tr>
            <th>#</th>
            <th>Loja</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach($stores as $store)
        <tr>
            <td>{{$store->id}}</td>
            <td>{{$store->name}}</td>
            <div class="btn group">
                <td><a href="{{route('admin.stores.edit',['store'=>$store->id])}}" class="btn btn-sm btn-primary">Editar</a>
                    <form action="{{route('admin.stores.destroy',['store'=>$store->id])}}" method="POST">
                        @csrf
                        @method("DELETE")
                        <button type="submit" class="btn btn-sm btn-danger">Excluir</button>
                    </form>
                </td>
            </div>
        </tr>
        @endforeach
    </tbody>

</table>
<br>
{{$stores->links()}}


@endsection