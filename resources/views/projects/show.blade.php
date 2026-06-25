<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$project->name}}</title>
    @vite(['resources/js/app.js', 'resources/sass/app.scss'])
</head>
<body>
    <section class="container">
        <h1 class="my-3">{{$project->name}}</h1>
        <div class="my-3">
        <div class="mb-4">
        <a href="{{ route('projects.index') }}" class="btn btn-outline-secondary btn-sm">
            <i class="bi bi-arrow-left"></i> Torna alla lista
        </a>
         </div>

    <div class="card shadow-sm">
        <div class="card-header bg-dark text-white d-flex justify-content-between align-items-center py-3">
            <h1 class="h3 mb-0">{{ $project->name }}</h1>
            <span class="badge bg-light text-dark fs-6">{{ $project->type->name }}</span>
        </div>

        <div class="card-body p-4">
            <div class="row g-4">
                
                <div class="col-md-4 border-end">
                    <div class="mb-3">
                        <label class="text-muted d-block small text-uppercase fw-bold">Cliente</label>
                        <span class="fs-5">{{ $project->client ?? 'N/D' }}</span>
                    </div>
                    
                    <div class="mb-3">
                        <label class="text-muted d-block small text-uppercase fw-bold">Data Completamento</label>
                        <span class="fs-5">
                            {{ \Carbon\Carbon::parse($project->completed)->format('d/m/Y H:i') }}
                        </span>
                    </div>
                </div>

                <div class="mb-3">
                    @if (count($project->technologies) > 0 )
                    @foreach ($project->technologies as $technology )
                    <span class="badge bg-warning"> {{ $technology->name }}</span>
                    @endforeach
                    @endif

                </div>

                <div class="col-md-8 ps-md-4">
                    <label class="text-muted d-block small text-uppercase fw-bold mb-2">Descrizione del Progetto</label>
                    <p class="lead text-secondary" style="white-space: pre-line;">
                        {{ $project->description }}
                    </p>
                </div>

            </div>
        </div>
       <div class="mb-4">
        <a href="{{ route('projects.edit', $project) }}" class="btn btn-outline-secondary btn-sm">
            Modifica progetto
        </a>
         </div>
         <div class="mb-4">

         <button type="button" class="btn btn-outline-danger btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Elimina progetto
        </button>
         </div>
    </div>
</div>
    </section>
<!-- Modale -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Sei sicuro di voler eliminare il progetto?</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       Il progetto verrà eliminato definitivamente
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
        <form action="{{ route('projects.destroy', $project) }}" method="POST">
                @csrf
                @method('DELETE')
              <button type="submit" class="btn btn-danger btn-sm">
               <i class="bi bi-trash"></i> Elimina Progetto
              </button>
            </form>
      </div>
    </div>
  </div>
</div>
</body>
</html>