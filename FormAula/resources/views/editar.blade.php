<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Editar Cliente</title>
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
                        <a class="nav-link active" href="/listar-cliente">Consultar</a>
                    </div>
                </div>
            </div>
        </nav>
        <br><br>
        <h2>Editar - Agendamento de Potenciais Clientes</h2>
        <br>
        <h5>Sistema Utilizado para agendamento de serviços</h5>
        <br>
        <form action="{{ url('/editar-cliente/' . $cliente->id) }}" method="POST">
            @csrf
            @method('POST') <!-- Necessário para simular POST, já que Laravel usa POST para updates -->
            <div class="mb-3">
                <label for="nome" class="form-label">Nome:</label>
                <input type="text" class="form-control" id="nome" name="nome" value="{{ $cliente->nome ?? '' }}">
            </div>
            <div class="mb-3">
                <label for="telefone" class="form-label">Telefone:</label>
                <input type="text" class="form-control" id="telefone" name="telefone" value="{{ $cliente->telefone ?? '' }}">
            </div>
            <div class="mb-3">
                <label for="origem" class="form-label">Origem:</label>
                <select class="form-select" id="origem" name="origem">
                    <option value="1" {{ $cliente->origem == '1' ? 'selected' : '' }}>Celular</option>
                    <option value="2" {{ $cliente->origem == '2' ? 'selected' : '' }}>Telefone Fixo</option>
                    <option value="3" {{ $cliente->origem == '3' ? 'selected' : '' }}>Whatsapp</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="data_contato" class="form-label">Data do Contato:</label>
                <input type="date" class="form-control" id="data_contato" name="data_contato" value="{{ $cliente->data_contato ?? '' }}">
            </div>
            <div class="mb-3">
                <label for="observacoes" class="form-label">Observações:</label>
                <textarea class="form-control" id="observacoes" name="observacoes" rows="3">{{ $cliente->observacoes ?? '' }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Salvar Alterações</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>