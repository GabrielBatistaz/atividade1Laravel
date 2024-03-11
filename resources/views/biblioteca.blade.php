<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Biblioteca</title>
</head>
<body>
    <h1>Página Biblioteca</h1>
    <p>Show do Milhão!</p>

    <a href="{{ route('post.index') }}" class="btn btn-primary">Página do Post</a>
    <hr>
    <a href="{{ route('aluno.index') }}" class="btn btn-primary">Página do Aluno</a>

</body>
</html>