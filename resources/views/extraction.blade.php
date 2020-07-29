<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Extração</title>
</head>
<body>

    <h1>Extração</h1>
<form action="{{ route('extractionUpdatePcr') }}" method="POST">
    @csrf
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Observações</th>
                <th width="100">Extraída?</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($samplesToExtract as $sample)
                <tr>
                    <td>{{ $sample->id }}</td>
                    <td>{{ $sample->observations }}</td>
                    <td>
                        <input type="checkbox" id="pcr" name="pcr" value="pcr">
                    </td>
                    <td>
                        <a href="">Remover</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <button type="submit">Enviar</button>
<form>

    
</body>
</html>