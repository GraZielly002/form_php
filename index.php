<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>

    <div class="container">
        <h1>Formulário de contato</h1>
        <form action="dados.php" method="post">
            <div>
                <label for="idNome" class="form-label">Nome:</label>
                <input type="text" name="campoNome" placeholder="Seu nome" id="idNome" class="form-control">
            </div>

            <div>
                <label for="idEmail" class="">E-mail:</label>
                <input type="email" name="campoEmail" placeholder="Josebezeradasilva@gmail.com" id="idEmail" class="form-control">
            </div>

            <div>
                <label for="idAssunto" class="form-label">Assunto:</label>
                <input type="text" name="campoAssunto" id="idAssunto" class="form-control">
            </div>

            <div class="mb-3">
                <label for="idMsg">Mensagem</label>
                <textarea name="campoMsg" id="idMsg" class="form-control" rows="5"></textarea>
            </div>

            <button type="submit" class="btn btn-warning">Enviar</button>
        </form>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>