<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>App Email</title>
</head>
<body>
    <div class="navbar bg-light">
        <div class="container-fluid">
            <div class="navbar-brand">
                <img src="./e-mail.png" alt="logo" width="30" height="30" class="d-inline-block align-text-top">
                App Email
            </div>
        </div>
    </div>
    <div class="row m-5">
        <div class="card">
            <div class="card-body">
                <form action="processo_envio.php">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Para</label>
                        <input type="email" class="form-control bg-light" id="exampleFormControlInput1" placeholder="name@example.com">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Assunto</label>
                        <input type="email" class="form-control bg-light" id="exampleFormControlInput1" placeholder="Assunto do e-mail">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Mensagem</label>
                        <textarea class="form-control bg-light" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                </form>
                <button class="btn btn-primary">Enviar Mensagem</button>
            </div>
        </div>
    </div>
</body>
</html>