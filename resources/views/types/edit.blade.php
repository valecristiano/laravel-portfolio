<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifica Tecnologia</title>
    
    @vite(['resources/js/app.js', 'resources/sass/app.scss'])
</head>
<body class="bg-light">

    <div class="container my-5">
        <div class="mb-4">
            <a href="{{ route('types.index') }}" class="btn btn-outline-secondary btn-sm">
                <i class="bi bi-arrow-left"></i> Torna alla lista
            </a>
        </div>

        <div class="card shadow-sm">
            <div class="card-header bg-dark text-white py-3">
                <h1 class="h4 mb-0">Modifica tecnologia</h1>
            </div>

            <div class="card-body p-4">
                <form action="{{ route('types.update', $type) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="row g-3">
                        <div class="col-md-6">
                            <label for="name" class="form-label fw-bold small text-uppercase text-muted">Nome</label>
                            <input type="text" name="name" id="name" class="form-control" required maxlength="100" value="{{ $type->name }}">
                        </div>

                        <div class="col-12">
                            <label for="description" class="form-label fw-bold small text-uppercase text-muted">Descrizione del Progetto *</label>
                            <textarea name="description" id="description" rows="5" class="form-control" required>{{ $type->description }}"</textarea>
                        </div>
                    </div>

                    <div class="mt-4 d-flex justify-content-end gap-2">
                        <a href="{{ route('types.index') }}" class="btn btn-light border">Annulla</a>
                        <button type="submit" class="btn btn-dark">Modifica Progetto</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>
</html>