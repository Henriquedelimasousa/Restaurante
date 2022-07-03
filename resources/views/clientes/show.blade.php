<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar cliente</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->

</head>
<body>

<div class="container pt-5">
        <div class="row">
            <div class="col-12">
                <h1>Cliente </h1>
            </div>
            <div class="col-12">
            
                    <div class="mb-3">
                        <label class="form-label">nome</label>
                        <input disabled type="text" value ="{{$cliente->nome}}" name="nome" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">email</label>
                        <input disabled type="email"value ="{{$cliente->email}}" name="email" class="form-control"">
                    </div>

        

                    <div class="mb-3">
                        <label class="form-label">Data de Criação</label>
                        <input disabled type="text"value ="{{$cliente->created_at}}" name="pontuacao" min="0" max="150" class="form-control"
                            >
                    </div>

                    
                    <div class="mb-3">
                        <label class="form-label">Ultima atualização</label>
                        <input disabled type="text"value ="{{$cliente->updated_at}}" name="pontuacao" min="0" max="150" class="form-control"
                            >
                    </div>

            

            
            </div>
        </div>
    </div>
    
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</html>