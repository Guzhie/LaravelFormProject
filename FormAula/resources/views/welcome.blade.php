<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulário de Endereço</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body style="background-color: #1F2326; color: #E4E4E4;">
    <div class="container mt-5">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Sistema Web</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link active" aria-current="page" href="/">Cadastrar-se</a>
                        <a class="nav-link" href="listar-cliente">Consultar</a>
                        </div>
                </div>
            </div>
        </nav>
        <form action="{{ url('/cadastrar-cliente') }}" method="POST">
            @csrf <!-- Protege contra CSRF -->
            <br><br>
            <h2>Cadastrar - Agendamento de Potenciais Clientes</h2>
            <br>
            <h5>Sistema Utilizado para agendamento de serviços</h5>
            <br>
            <div class="mb-3">
                <label for="Nome" class="form-label">Nome:</label>
                <input type="text" class="form-control" id="nameinput" name="nome">
            </div>
            <div class="mb-3">
                <label for="Telefone" class="form-label">Telefone:</label>
                <input type="text" class="form-control" id="telefoneinput" name="telefone">
            </div>
            <div class="mb-3">
                <label for="Origem" class="form-label">Origem:</label>
                <select class="form-select" name="origem">
                    <option value="1">Celular</option>
                    <option value="2">Telefone Fixo</option>
                    <option value="3">Whatsapp</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="Data" class="form-label">Data do Contato:</label>
                <input type="date" class="form-control" id="dateinput" name="data_contato">
            </div>
            <div class="mb-3">
                <label for="Observação" class="form-label">Observações</label>
                <textarea class="form-control" id="observaçãoinput" name="observacoes" rows="3"></textarea>
            </div>
            <input class="btn btn-primary" type="submit" value="Cadastrar">
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>