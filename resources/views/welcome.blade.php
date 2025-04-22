<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Bem-vindo à Pastelaria Fod4</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #ffe29f, #ffa99f);
            height: 100vh;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Segoe UI', sans-serif;
        }
        .welcome-box {
            text-align: center;
            background: white;
            padding: 50px;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
        }
        .welcome-box h1 {
            font-size: 2.5rem;
            margin-bottom: 20px;
            color: #ff6600;
        }
        .welcome-box p {
            font-size: 1.2rem;
            color: #555;
        }
    </style>
</head>
<body>
    <div class="welcome-box">
        <h1>Bem-vindo à Pastelaria Fod4 🍽️</h1>
        <p>Seu lugar favorito para saborear os melhores pastéis e acompanhamentos!</p>
        <a href="{{ route('pasteis.index') }}" class="btn btn-warning mt-4">Entrar na Pastelaria</a>
    </div>
</body>
</html>
