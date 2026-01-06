<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Estoque</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    
    <style>
        :root {
            /* Definindo nosso Verde Claro Personalizado */
            --main-green: #4ade80; /* Verde Claro Vibrante */
            --dark-green: #166534; /* Verde Escuro para textos */
            --hover-green: #22c55e;
            --bg-light: #f0fdf4; /* Fundo branco/esverdeado bem suave */
        }

        body {
            background-color: var(--bg-light);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        /* Navbar Personalizada */
        .navbar-custom {
            background-color: #ffffff;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
            border-bottom: 3px solid var(--main-green);
        }

        .navbar-brand {
            color: var(--dark-green) !important;
            font-weight: bold;
        }

        .nav-link {
            color: #555 !important;
            font-weight: 500;
        }

        .nav-link:hover {
            color: var(--main-green) !important;
        }

        /* Botões Verdes */
        .btn-green {
            background-color: var(--main-green);
            color: white;
            border: none;
            font-weight: 600;
        }

        .btn-green:hover {
            background-color: var(--hover-green);
            color: white;
        }

        /* Card Personalizado */
        .card-custom {
            border: none;
            border-radius: 15px;
            box-shadow: 0 10px 20px rgba(0,0,0,0.05);
            overflow: hidden;
        }

        .card-header-custom {
            background-color: var(--main-green);
            color: white;
            text-align: center;
            padding: 20px;
            font-size: 1.2rem;
            font-weight: bold;
        }

        /* Ajuste para o rodapé ficar sempre embaixo */
        main {
            flex: 1;
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-custom sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#"><i class="fas fa-boxes me-2"></i> EstoqueApp</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    @auth
                        <li class="nav-item"><a class="nav-link" href="#">Painel</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Produtos</a></li>
                        <li class="nav-item"><a class="nav-link text-danger" href="#">Sair</a></li>
                    @else
                        <li class="nav-item"><a class="nav-link" href="#">Login</a></li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>

    <main class="py-4">
        @yield('content')
    </main>

    <footer class="text-center py-3 bg-white text-muted mt-auto border-top">
        <small>&copy; {{ date('Y') }} Sistema de Estoque. Todos os direitos reservados.</small>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>