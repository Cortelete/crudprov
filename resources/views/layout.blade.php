<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Pastelaria Fod4</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #fff3e0, #ffe0b2);
            padding: 20px;
        }
        h1 {
            color: #ff6f00;
            text-align: center;
            margin-bottom: 30px;
        }
        nav {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-bottom: 30px;
        }
        nav a {
            font-weight: bold;
            color: white;
            background-color: #ff6f00;
            padding: 10px 20px;
            border-radius: 8px;
            text-decoration: none;
            transition: 0.3s;
        }
        nav a:hover {
            background-color: #e65100;
        }

        .card {
            transition: transform 0.2s, box-shadow 0.2s;
        }
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(0,0,0,0.15);
        }
    </style>
</head>
<body>
    <h1>Pastelaria Fod4 🍽️</h1>
    
    <nav>
        <a href="{{ route('pasteis.index') }}">Pastéis</a>
        <a href="{{ route('acompanhamentos.index') }}">Acompanhamentos</a>
        <a href="{{ route('combo') }}">Montar Combo</a>
    </nav>

    <div class="mb-3">
        <a href="{{ url('/') }}" class="btn btn-outline-secondary">&larr; Voltar para o início</a>
    </div>

    <div class="container">
        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.querySelectorAll('.toggle-btn').forEach(function (btn) {
            const targetSelector = btn.getAttribute('data-bs-target');
            const target = document.querySelector(targetSelector);

            target.addEventListener('show.bs.collapse', function () {
                btn.textContent = 'Ver menos';
            });

            target.addEventListener('hide.bs.collapse', function () {
                btn.textContent = 'Ver mais';
            });
        });
    </script>

</body>
</html>