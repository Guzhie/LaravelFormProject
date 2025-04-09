<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Clientes</title>
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
                        <a class="nav-link" href="/">Cadastrar-se</a>
                        <a class="nav-link active" aria-current="page" href="/listar-cliente">Consultar</a>
                    </div>
                </div>
            </div>
        </nav>
        <br><br>
        <h2>Consultar - Lista de Clientes</h2>
        <br>
        <h5>Sistema Utilizado para agendamento de serviços</h5>
        <br>
        @if($clientes->isEmpty())
            <div class="alert alert-warning" role="alert">
                Nenhum cliente cadastrado.
            </div>
        @else
            <div class="row">
                @foreach($clientes as $cliente)
                    <div class="col-md-4 mb-3">
                        <div class="card" style="background-color: #2A2F33; color: #E4E4E4;">
                            <div class="card-body">
                                <h5 class="card-title">{{ $cliente->nome ?? 'Nome não informado' }}</h5>
                                <p class="card-text">
                                    <strong>Telefone:</strong> {{ $cliente->telefone ?? 'Não informado' }}<br>
                                    <strong>Origem:</strong> {{ $cliente->origem ?? 'Não informado' }}<br>
                                    <strong>Data do Contato:</strong> {{ $cliente->data_contato ?? 'Não informado' }}<br>
                                    <strong>Observações:</strong> {{ $cliente->observacoes ?? 'Sem observações' }}
                                </p>
                                <a href="{{ url('/editar-cliente/' . $cliente->id) }}" class="btn btn-primary btn-sm">Editar</a>
                                <a href="{{ url('/deletar-cliente/' . $cliente->id) }}" class="btn btn-primary btn-sm">Deletar</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>