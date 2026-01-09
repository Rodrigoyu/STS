<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EstoqueApp</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
    
    <style>
        :root {
            --primary-green: #4ade80;
            --hover-green: #dcfce7;
            --text-dark: #374151;
            --text-light: #9ca3af;
            --bg-body: #f9fafb;
            --sidebar-width: 260px;
        }

        body {
            background-color: var(--bg-body);
            font-family: 'Inter', sans-serif;
            color: var(--text-dark);
            display: flex;
            min-height: 100vh;
            overflow-x: hidden;
        }

        /* --- SIDEBAR --- */
        #sidebar {
            width: var(--sidebar-width);
            min-width: var(--sidebar-width);
            height: 100vh;
            background: #ffffff;
            border-right: 1px solid #e5e7eb;
            display: flex;
            flex-direction: column;
            position: fixed; /* Sempre fixo para garantir que o overlay funcione bem */
            top: 0;
            left: 0;
            z-index: 1050; /* Z-Index alto para ficar acima de tudo */
            transition: transform 0.3s ease-in-out;
            transform: translateX(0); /* Estado normal no Desktop */
        }

        /* Esconder Sidebar no Mobile por padrão */
        @media (max-width: 768px) {
            #sidebar {
                transform: translateX(-100%); /* Esconde para a esquerda */
            }
            #sidebar.active {
                transform: translateX(0); /* Mostra ao ativar */
                box-shadow: 5px 0 15px rgba(0,0,0,0.1);
            }
        }

        /* Overlay (Fundo Escuro no Mobile) */
        .overlay {
            display: none;
            position: fixed;
            width: 100vw;
            height: 100vh;
            background: rgba(0, 0, 0, 0.5);
            z-index: 1040; /* Logo abaixo do sidebar */
            opacity: 0;
            transition: opacity 0.3s ease-in-out;
        }

        .overlay.active {
            display: block;
            opacity: 1;
        }

        /* Logo e Links */
        #sidebar .brand {
            padding: 25px;
            font-size: 1.4rem;
            font-weight: 700;
            color: var(--text-dark);
            display: flex;
            justify-content: space-between; /* Para caber o botão fechar se precisar */
            align-items: center;
        }
        #sidebar .brand i { color: var(--primary-green); }
        
        #sidebar ul.components { padding: 10px 15px; flex: 1; }
        #sidebar ul li { margin-bottom: 5px; }
        
        #sidebar ul li a {
            padding: 12px 20px;
            display: flex;
            align-items: center;
            color: var(--text-dark);
            text-decoration: none;
            border-radius: 10px;
            font-weight: 500;
            transition: all 0.2s;
            font-size: 0.95rem;
        }
        #sidebar ul li a i { width: 30px; color: var(--text-light); font-size: 1.1rem; }
        
        #sidebar ul li a:hover, #sidebar ul li a.active {
            background-color: var(--hover-green);
            color: #166534;
        }
        #sidebar ul li a:hover i, #sidebar ul li a.active i { color: var(--primary-green); }

        /* --- CONTEÚDO --- */
        #content {
            flex: 1;
            display: flex;
            flex-direction: column;
            width: 100%;
            margin-left: var(--sidebar-width); /* Espaço para o menu no Desktop */
            transition: margin-left 0.3s ease-in-out;
        }

        @media (max-width: 768px) {
            #content {
                margin-left: 0; /* No mobile, o conteúdo ocupa tudo */
            }
        }

        .top-navbar {
            padding: 20px 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .btn-toggle {
            color: var(--text-dark);
            background: white;
            border: 1px solid #e5e7eb;
            z-index: 1060;
        }
    </style>
</head>
<body>

    <div id="overlay" class="overlay"></div>

    <nav id="sidebar">
        <div class="brand">
            <div><i class="fas fa-boxes"></i> STS - Estoque</div>
            <button class="btn btn-sm btn-light d-md-none border-0" id="closeSidebar">
                <i class="fas fa-times"></i>
            </button>
        </div>

        <ul class="list-unstyled components">
            <li>
                <a href="{{ route('dashboard') }}" class="{{ request()->routeIs('dashBoard') ? 'active' : '' }}">
                    <i class="fas fa-chart-pie"></i> Visão Geral
                </a>
            </li>
            <li>
                <a href="{{ route('produto') }}" class="{{ request()->routeIs('produto') ? 'active' : '' }}">
                    <i class="fas fa-box"></i> Produtos
                </a>
            </li>
            <li>
                <a href="{{ route('movimento') }}" class="{{ request()->routeIs('stockMovimento') ? 'active' : '' }}">
                    <i class="fas fa-exchange-alt"></i> Movimentações
                </a>
            </li>
            <li class="mt-4 small text-uppercase text-muted fw-bold px-3 mb-2" style="font-size: 0.75rem;">Administração</li>
            <li>
                <a href="{{ route('categoria') }}" class="{{ request()->routeIs('categoria') ? 'active' : '' }}">
                    <i class="fas fa-tags"></i> Categorias
                </a>
            </li>
            <li>
                <a href="{{ route('usuario') }}" class="{{ request()->routeIs('usuario')? 'active' : '' }}">
                    <i class="fas fa-users"></i> Usuários
                </a>
            </li>
        </ul>

        <div class="p-3 mt-auto border-top">
            <div class="d-flex align-items-center gap-3 px-2">
                <div class="bg-success rounded-circle text-white d-flex justify-content-center align-items-center" style="width: 40px; height: 40px; font-weight: bold;">
                    R
                </div>
                <div style="line-height: 1.2;">
                    <span class="d-block fw-bold text-dark" style="font-size: 0.9rem;">Rodrigo</span>
                    <small class="text-muted" style="font-size: 0.8rem;">Admin</small>
                </div>
                <a href="{{ route('logout') }}" class="ms-auto text-danger" title="Sair"><i class="fas fa-sign-out-alt"></i></a>
            </div>
        </div>
    </nav>

    <div id="content">
        <nav class="top-navbar">
            <div class="d-flex align-items-center gap-3">
                <button type="button" id="sidebarCollapse" class="btn btn-toggle d-md-none rounded-circle p-2 shadow-sm">
                    <i class="fas fa-bars"></i>
                </button>
                <h4 class="m-0 fw-bold text-dark">@yield('title', 'Painel')</h4>
            </div>

            <div class="d-flex gap-2">
                <button class="btn btn-light bg-white border shadow-sm text-muted rounded-pill px-3">
                    <i class="fas fa-bell"></i>
                </button>
                <button class="btn btn-success text-white rounded-pill px-4 fw-bold shadow-sm" style="background-color: var(--primary-green); border: none;">
                    <i class="fas fa-plus me-1"></i> Novo Item
                </button>
            </div>
        </nav>

        <div class="px-4 pb-4">
            @yield('content')
            
        </div>
    </div>

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
    @endif
    <!-- popUp de informações-->
    @if(session('info'))
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
    <!-- script do popUp-->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var toastElList = [].slice.call(document.querySelectorAll('.toast'))
        var toastList = toastElList.map(function (toastEl) {
            return new bootstrap.Toast(toastEl, { delay: 5000 }).show(); // 5 segundos
        });
    });
</script>
    <!--script do bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Elementos
        const sidebar = document.getElementById('sidebar');
        const overlay = document.getElementById('overlay');
        const openBtn = document.getElementById('sidebarCollapse');
        const closeBtn = document.getElementById('closeSidebar');

        // Função para Alternar
        function toggleMenu() {
            sidebar.classList.toggle('active');
            overlay.classList.toggle('active');
        }

        // Eventos
        openBtn.addEventListener('click', toggleMenu);   // Botão Abrir
        closeBtn.addEventListener('click', toggleMenu);  // Botão Fechar (X)
        overlay.addEventListener('click', toggleMenu);   // Clicar fora fecha
    </script>
</body>
</html>