<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projects</title>
    @vite(['resources/js/app.js', 'resources/sass/app.scss'])
</head>
<body>
    
<section class="container">
    <h1 class="my-3">Projects</h1>
</section>
<section class="container">
<div class="table-responsive">
    <table class="table table-striped table-hover align-middle">
        <thead>
            <tr>
                <th scope="col">Nome Progetto</th>
                <th scope="col">Tecnologia</th>
                <th scope="col">Cliente</th>
                <th scope="col">Data Completamento</th>
                <th scope="col">Descrizione</th>
                <th scope="col">Link</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($projects as $project)
                <tr>
                    <td><strong>{{ $project->name }}</strong></td>
                    <td>
                        <span class="badge bg-secondary">{{ $project->tech }}</span>
                    </td>
                    <td>
                        {{ $project->client ?? 'N/D' }}
                    </td>
                    <td>
                        {{ \Carbon\Carbon::parse($project->completed)->format('d/m/Y H:i') }}
                    </td>
                    <td>
                        <small class="text-muted">{{ Str::limit($project->description, 50) }}</small>
                    </td>
                    <td>
                        <a href="{{route('projects.show', $project->id)}}">Clicca qui</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
</section>
</body>
</html>