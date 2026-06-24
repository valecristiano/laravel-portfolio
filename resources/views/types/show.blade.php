<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$type->name}}</title>
    @vite(['resources/js/app.js', 'resources/sass/app.scss'])
</head>
<body>
    <section class="container">
        <h1 class="my-3">{{$type->name}}</h1>
        <div class="my-3">
        <div class="mb-4">
        <a href="{{ route('types.index') }}" class="btn btn-outline-secondary btn-sm">
            <i class="bi bi-arrow-left"></i> Torna alla lista
        </a>
         </div>

    <div class="card shadow-sm">
        <div class="card-header bg-dark text-white d-flex justify-content-between align-items-center py-3">
            <h1 class="h3 mb-0">{{ $type->name }}</h1>
            
        </div>

        <div class="card-body p-4">
            <div class="row g-4">
     
                <div class="col-md-8 ps-md-4">
                    <label class="text-muted d-block small text-uppercase fw-bold mb-2">Descrizione</label>
                    <p class="lead text-secondary" style="white-space: pre-line;">
                        {{ $type->description }}
                    </p>
                </div>

            </div>
        </div>
        <div class="mb-4">
        <a href="{{ route('types.edit', $type) }}" class="btn btn-outline-secondary btn-sm">
            Modifica progetto
        </a>
         </div>
    </div>
</div>
    </section>

</body>
</html>