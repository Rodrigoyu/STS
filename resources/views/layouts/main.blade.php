<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EstoqueApp - Gestão Inteligente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    
    <style>
        :root {
            --primary-green: #4ade80;       /* Verde Principal */
            --dark-green: #14532d;          /* Verde Escuro (Texto/Menu) */
            --light-bg: #f0fdf4;            /* Fundo Claro */
            --sidebar-width: 260px;
        }

        body {
            background-color: var(--light-bg);
            font-family: 'Segoe UI', sans-serif;
            overflow-x: hidden;
        }

        /* Sidebar (Menu Lateral) */
        #sidebar {
            width: var(--sidebar-width);
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            background: linear-gradient(180deg, var(--dark-green) 0%, #166534 100%);
            color: white;
            transition: all 0.3s;
            z-index: 1000;
        }

        #sidebar .brand {
            font-size: 1.5rem;
            font-weight: bold;
            padding: 20px;
            border-bottom: 1px solid rgba(255,255,255,0.1);
            color: var(--primary-green);
        }

        #sidebar ul.components {
            padding: 20px 0;
        }

        #sidebar ul li a {
            padding: 15px 25px;
            display: block;
            color: rgba(255,255,255,0.8);
            text-decoration: none;
            transition: 0.3s;
            font-size: 1.05rem;
        }

        #sidebar ul li a:hover, #sidebar ul li a.active {
            background-color: rgba(255,255,255,0.1);
            color: #fff;
            border-left: 4px solid var(--primary-green);
        }

        #sidebar ul li a i {
            width: 30px;
        }

        /* Conteúdo Principal */
        #content {
            margin-left: var(--sidebar-width);
            transition: all 0.3s;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        /* Navbar Superior */
        .top-navbar {
            background-color: white;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
            padding: 15px 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        /* Responsividade (Mobile) */
        @media (max-width: 768px) {
            #sidebar {
                margin-left: calc(-1 * var(--sidebar-width));
            }
            #sidebar.active {
                margin-left: 0;
            }
            #content {
                margin-left: 0;
            }
            #content.active {
                margin-left: var(--sidebar-width); /* Empurra conteúdo no mobile se quiser, ou usa overlay */
            }
        }
    </style>
</head>
<body>

    <nav id="sidebar">
        <div class="brand">
            <i class="fas fa-boxes me-2"></i> EstoqueApp
        </div>

        <ul class="list-unstyled components">
            <li>
                <a href="{{ url('/dashboard') }}" class="active">
                    <i class="fas fa-chart-line"></i> Dashboard
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fas fa-box-open"></i> Produtos
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fas fa-exchange-alt"></i> Movimentações
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fas fa-tags"></i> Categorias
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fas fa-users"></i> Usuários
                </a>
            </li>
        </ul>
    </nav>

    <div id="content">
        <nav class="top-navbar">
            <button type="button" id="sidebarCollapse" class="btn btn-outline-success btn-sm d-md-none">
                <i class="fas fa-bars"></i>
            </button>
            
            <h4 class="m-0 text-secondary">@yield('title', 'Painel')</h4>

            <div class="dropdown">
                <button class="btn btn-light dropdown-toggle d-flex align-items-center gap-2" type="button" data-bs-toggle="dropdown">
                    <div class="bg-success rounded-circle text-white d-flex justify-content-center align-items-center" style="width: 35px; height: 35px;">
                        <i class="fas fa-user"></i>
                    </div>
                    <span>Admin</span> </button>
                <ul class="dropdown-menu dropdown-menu-end shadow border-0">
                    <li><a class="dropdown-item" href="#">Perfil</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item text-danger" href="#">Sair</a></li>
                </ul>
            </div>
        </nav>

        <div class="p-4">
            @yield('content')
        </div>
        
        <footer class="mt-auto bg-white p-3 text-center text-muted border-top text-sm">
            <small>&copy; {{ date('Y') }} EstoqueApp. Todos os direitos reservados.</small>
        </footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Script simples para abrir/fechar menu no mobile
        document.getElementById('sidebarCollapse').addEventListener('click', function() {
            document.getElementById('sidebar').classList.toggle('active');
        });
    </script>
</body>
</html>