<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>

    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="/styles/resultado.css">
</head>
<body>
    <div class="container">
        <header>
            <h1>Resultado</h1>
        </header>
        <main>
            <span>{{ $n1 }}</span>
            <span>{{ $sinal }}</span>
            <span>{{ $n2 }}</span>
            <span>=</span>
            <span>{{ $resultado }}</span>
        </main>
    </div>
</body>
</html>