<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Pastelaria Fod4</title>
    <style>
        body { font-family: Arial, sans-serif; padding: 20px; background: #f8f8f8; }
        h1 { color: #ff9900; }
        a { margin-right: 10px; }
        form { margin-top: 10px; }
        input, select { padding: 5px; margin: 5px 0; }
    </style>
</head>
<body>
    <h1>Pastelaria Fod4🍽️</h1>
    <nav>
        <a href="{{ route('pasteis.index') }}">Pastéis</a>
        <a href="{{ route('acompanhamentos.index') }}">Acompanhamentos</a>
    </nav>
    <hr>
    @yield('content')
</body>
</html>
