<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Types</title>
    @vite(['resources/js/app.js', 'resources/sass/app.scss'])
</head>
<body>
    
<section class="container">
    <h1 class="my-3">Types</h1>
</section>
<section class="container">
<div class="table-responsive">
    <table class="table table-striped table-hover align-middle">
        <thead>
            <tr>
                <th scope="col">Nome </th>
                <th scope="col">Descrizione</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($types as $type)
                <tr>
                    <td><strong>{{ $type->name }}</strong></td>                   
                    <td>
                        <small class="text-muted">{{ Str::limit($type->description, 50) }}</small>
                    </td> 
                    <td>
                        <a href="{{route('types.show', $type->id)}}">Clicca qui</a>
                    </td>             
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
</section>
</body>
</html>