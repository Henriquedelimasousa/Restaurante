<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <title>Clientes</title>
</head>

<body>
    <div class="container pt-5">
        <div class="row">
            <div class="col-12">
                <h1> Clientes </h1>
                <a href="/clientes/create"> Adicionar cliente </a>

            </div>
            <div class="col-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Email</th>
                            <th scope="col">Telefone</th>
                            <th scope="col">Ações</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach($clientes as $cliente)

                        <tr>
                            <th scope="row">{{$cliente->id}}</th>
                            <td>{{$cliente->nome}}</td>
                            <td>{{$cliente->email}}</td>
                            <td>{{$cliente->telefone}}</td>
                            <td>
                                <a href="/clientes/{{$cliente->id}}" class="btn bg-primary">Mostrar </a>
                                <a href="/clientes/{{$cliente->id}}/edit" class="btn bg-primary">Editar </a>
                                <form action="/clientes/{{$cliente->id}}" method="POST">
                                    @csrf
                                    @method('delete')

                                    <button type="submit" href="#" class="btn bg-danger">Deletar </button>
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>


</html>