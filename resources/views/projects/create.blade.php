<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crea Nuovo Progetto</title>
    
    @vite(['resources/js/app.js', 'resources/sass/app.scss'])
</head>
<body class="bg-light">

    <div class="container my-5">
        <div class="mb-4">
            <a href="{{ route('projects.index') }}" class="btn btn-outline-secondary btn-sm">
                <i class="bi bi-arrow-left"></i> Torna alla lista
            </a>
        </div>

        <div class="card shadow-sm">
            <div class="card-header bg-dark text-white py-3">
                <h1 class="h4 mb-0">Crea Nuovo Progetto</h1>
            </div>

            <div class="card-body p-4">
                <form action="{{ route('projects.store') }}" method="POST">
                    @csrf

                    <div class="row g-3">
                        <div class="col-md-6">
                            <label for="name" class="form-label fw-bold small text-uppercase text-muted">Nome Progetto *</label>
                            <input type="text" name="name" id="name" class="form-control" required maxlength="100">
                        </div>

                        <div class="col-md-6">
                            
                            <label for="type_id" class="form-label fw-bold small text-uppercase text-muted">Tecnologia Usata *</label>
                            <select name="type_id" id="type_id">
                                @foreach ( $types as $type )
                                <option value="{{ $type->id}}">{{$type->name}}</option>
                                @endforeach                              
                            </select>
                        </div>
                          <div class="col-md-6">
                            
                              @foreach ( $technologies as $technology )
                              <input type="checkbox" id="tech-{{ $technology->id}}" name="technologies[]" value="{{ $technology->id}}" >
                              <label for="tech-{{ $technology->id}}" class="form-label fw-bold small text-uppercase text-muted">{{ $technology->name}}</label>
                            @endforeach                              
                            </select>
                        </div>

                        <div class="col-md-6">
                            <label for="client" class="form-label fw-bold small text-uppercase text-muted">Cliente</label>
                            <input type="text" name="client" id="client" class="form-control">
                        </div>

                        <div class="col-md-6">
                            <label for="completed" class="form-label fw-bold small text-uppercase text-muted">Data Completamento *</label>
                            <input type="date" name="completed" id="completed" class="form-control" required>
                        </div>

                        <div class="col-md-6">
                            <label for="url_git" class="form-label fw-bold small text-uppercase text-muted">Link Repository GitHub</label>
                            <input type="text" name="url_git" id="url_git" class="form-control" placeholder="https://github.com/...">
                        </div>

                        <div class="col-md-6">
                            <label for="url_img" class="form-label fw-bold small text-uppercase text-muted">Link Immagine Anteprima</label>
                            <input type="text" name="url_img" id="url_img" class="form-control" placeholder="https://...">
                        </div>

                        <div class="col-12">
                            <label for="description" class="form-label fw-bold small text-uppercase text-muted">Descrizione del Progetto *</label>
                            <textarea name="description" id="description" rows="5" class="form-control" required></textarea>
                        </div>
                    </div>

                    <div class="mt-4 d-flex justify-content-end gap-2">
                        <a href="{{ route('projects.index') }}" class="btn btn-light border">Annulla</a>
                        <button type="submit" class="btn btn-dark">Crea Progetto</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>
</html>