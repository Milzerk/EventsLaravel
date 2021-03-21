<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <form action="{{ route('user.store') }}" method="post">
            <div class="col-md-6 my-3">
                <h3>Usuário</h3>
                @csrf
                <div class="mb-3">
                    <span>Nome</span>
                    <input type="text" name="name" id="name" class="form-control">
                </div>
                <div class="mb-3">
                    <span>Email</span>
                    <input type="email" name="email" id="email" class="form-control">
                </div>
                <div class="mb-3">
                    <span>Senha</span>
                    <input type="password" name="password" id="password" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">>Salvar</button>
            </div>
        </form>
    </div>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>