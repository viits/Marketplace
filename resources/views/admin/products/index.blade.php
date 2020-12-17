@extends('layouts.app')

@section('content')

<a href="{{route('admin.products.create')}}" class="btn btn-lg btn-success">Criar Produto</a>


<table class="table table-striped">
    <thead>
        <tr>
            <th>#</th>
            <th>Nome</th>
            <th>Preço</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach($products as $prod)
        <tr>
            <td>{{$prod->id}}</td>
            <td>{{$prod->name}}</td>
            <td>{{$prod->price}}</td>
            <td> <a href="{{route('admin.products.edit',['product'=>$prod->id])}}" class="btn btn-sm btn-primary">Editar</a></td>
            <td> <a href="{{route('admin.products.destroy',['product'=>$prod->id])}}" class="btn btn-sm btn-danger">Excluir</a></td>
        </tr>
        @endforeach
    </tbody>

</table>
<br>
{{$products->links()}}

@endsection