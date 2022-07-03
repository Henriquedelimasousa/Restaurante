<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Produtos</title>
</head>

<body>
    <div class="container pt-5">
        <div class="row">
            <div class="col-12">
                <h1> Produtos</h1>
                <a href="/produtos/create">Adicionar Produtos</a>

            </div>
            <div class="col-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">Título</th>
                            <th scope="col">Descrição</th>
                            <th scope="col">Valor</th>
                            <th scope="col">Ações</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($produtos as $produto)

                        <tr>
                            <th scope="row">{{$produto->id}}</th>
                            <td>{{$produto->titulo}}</td>
                            <td>{{$produto->descricao}}</td>
                            <td>{{$produto->valor}}</td>
                            <td>
                                <a href="/produtos/{{$produto->id}}" class="btn bg-primary">Mostrar</a>
                                <a href="/produtos/{{$produto->id}}/edit" class="btn bg-primary">Editar</a>
                                <form action="/produtos/{{$produto->id}}" method="post">
                                @csrf
                                @method('delete')

                                <button type="submit" class="btn bg-danger">Deletar</button>
                                </form>
                            </td>
                        </tr>

                    </tbody>
                    @endforeach
                </table>
            </div>
        </div>
    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>