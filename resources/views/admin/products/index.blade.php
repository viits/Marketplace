@extends('layouts.app')

@section('content')

<a href="{{route('admin.products.create')}}" class="btn btn-lg btn-success">Criar Produto</a>


<table class="table table-striped">
    <thead>
        <tr>
            <th>#</th>
            <th>Nome</th>
            <th>Preço</th>
            <th>Loja</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach($products as $prod)
        <tr>
            <td>{{$prod->id}}</td>
            <td>{{$prod->name}}</td>
            <td>{{$prod->price}}</td>
            <td>{{$prod->store->namespace}}</td>
            <div class="btn-group">
                <td> <a href="{{route('admin.products.edit',['product'=>$prod->id])}}" class="btn btn-sm btn-primary">Editar</a>

                    <form action="{{route('admin.products.destroy',['product'=>$prod->id])}}" method="POST">
                        @csrf
                        @method("DELETE")
                        <button type="submit" class="btn btn-sm btn-danger">Remove</button>
                    </form>
                </td>
            </div>
        </tr>
        @endforeach
    </tbody>

</table>
<br>
{{$products->links()}}

@endsection