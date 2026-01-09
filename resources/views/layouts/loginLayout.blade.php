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
            <a class="navbar-brand" href="#"><i class="fas fa-boxes me-2"></i>STS - Estoque</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            
        </div>
    </nav>

    <main class="py-4">
        @yield('content')
    </main>

    <footer class="text-center py-3 bg-white text-muted mt-auto border-top">
        <small>&copy; {{ date('Y') }} Sistema de Estoque. Todos os direitos reservados.</small>
    </footer>

    <div class="toast-container position-fixed bottom-0 end-0 p-3">
    <!-- popUp de sucesso-->
    @if(session('success'))
    <div id="successToast" class="toast align-items-center text-white bg-success border-0 shadow-lg" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="d-flex p-2">
            <div class="toast-body d-flex align-items-center gap-2">
                <i class="fas fa-check-circle fs-5"></i>
                <div>
                    <strong class="d-block">Sucesso!</strong>
                    {{ session('success') }}
                </div>
            </div>
            <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
    </div>
    <!-- popUp de informações-->
    @elseif(session('info'))
    <div id="infoToast" class="toast align-items-center text-white bg-dark border-0 shadow-lg" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="d-flex p-2">
            <div class="toast-body d-flex align-items-center gap-2">
                <i class="fas fa-info-circle fs-5 text-info"></i>
                <div>
                    {{ session('info') }}
                </div>
            </div>
            <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="dismiss" aria-label="Close"></button>
        </div>
    </div>
    @endif

</div>

<script >
    document.addEventListener('DOMContentLoaded', function () {
        var toastElList = [].slice.call(document.querySelectorAll('.toast'))
        var toastList = toastElList.map(function (toastEl) {
            return new bootstrap.Toast(toastEl, { delay: 5000 }).show(); // 5 segundos
        });
    });
</script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>