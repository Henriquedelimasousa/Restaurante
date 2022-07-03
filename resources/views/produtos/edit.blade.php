<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Produto</title>
</head>
<body>
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

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


    <div class="container pt-5">
        <div class="row">
            <div class="col-12">
                <h1> Produto</h1>
             
            </div>
            <div class="col-12">
             <form action="/produtos/{{$produto->id}}" method="post">
             @method ('put')
             @csrf
             
             <div class="mb-3">
                        <label class="form-label">Título</label>
                        <input type="text" value="{{$produto->titulo}}"  name="titulo" class="form-control" placeholder=" tituloa aqui ">
                    </div>

    
                    <div class="mb-3">
                        <label class="form-label">Descrição</label>
                        <input type="text" value="{{$produto->descricao}}" name="descricao" class="form-control" placeholder="EX: Henrique ">
                    </div>

                        
             <div class="mb-3">
                        <label class="form-label">Valor</label>
                        <input type="number" value="{{$produto->valor}}" name="valor" class="form-control" placeholder="EX: Henrique ">
                    </div>

                    <button type="submit" class="btn bg-success" > Salvar</button>

             </form>
            </div>
        </div>
    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>
</body>
</html>