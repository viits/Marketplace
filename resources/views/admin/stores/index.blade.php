<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <table>
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
                    <td></td>
                </tr>
                @endforeach
            </tbody>

        </table>
        <br>
        {{$stores->links()}}
    </div>
</body>
</html>