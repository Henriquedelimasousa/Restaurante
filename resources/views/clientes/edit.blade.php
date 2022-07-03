<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <title>Editar Cliente</title>
</head>

<body>
      
    <div class="container pt-5">
        <div class="row">
        
            <div class="col-12">
                <form action="/clientes/{{$cliente->id}}" method="post">

                @method ('put') 

                @csrf 

                    <div class="mb-3">
                        <label class="form-label">Nome</label>
                        <input type="text" value ="{{$cliente->nome}}" name="nome" class="form-control" placeholder="EX: Henrique ">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" value ="{{$cliente->email}}" name="email" class="form-control" placeholder="a@a.com">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Telefone</label>
                        <input type="number" value ="{{$cliente->telefone}}" name="telefone" class="form-control" placeholder="Ex 0 00000000 ">
                    </div>

                    <button class="btn bg-success" type="submit"> Cadastrar </button>

                </form>
            </div>




        </div>





    </div>



</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>