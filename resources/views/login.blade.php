@extends('layouts.loginLayout')

@section('content')

    <div class="container">
        <div class="row justify-content-center align-items-center" style="min-height: 70vh;">
            <div class="col-md-6 col-lg-4">

                <div class="card card-custom">
                    <div class="card-header-custom">
                        <i class="fas fa-user-circle fa-2x mb-2"></i><br>
                        Acesso ao Sistema
                    </div>

                    {{-- Erro de Validação (Campos vazios, etc) --}}
                    <div class="card-body p-4">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul class="mb-0">
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>

                            
                        @endif

                        {{-- Erro de Login (Usuário ou senha incorretos) --}}


                        @if (session('loginError'))
                            <div class="alert alert-danger">
                                <i class="fas fa-exclamation-triangle me-2"></i>
                                {{ session('loginError') }}
                            </div>
                        @endif
                        <!--formulario--> 
                        <form method="POST" action="{{ route('loginSubmit') }}">
                            @csrf

                            <div class="mb-3">
                                <label for="email" class="form-label text-muted">E-mail</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-white text-success border-end-0">
                                        <i class="fas fa-envelope"></i>
                                    </span>
                                    <input type="email" class="form-control border-start-0 ps-0" id="email"
                                        name="email" placeholder="seu@email.com" required autofocus>
                                </div>

                            </div>

                            <div class="mb-3">
                                <label for="password" class="form-label text-muted">Senha</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-white text-success border-end-0">
                                        <i class="fas fa-lock"></i>
                                    </span>
                                    <input type="password" class="form-control border-start-0 ps-0" id="password"
                                        name="password" placeholder="******" required>
                                </div>
                            </div>

                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="remember" name="remember">
                                <label class="form-check-label text-muted" for="remember">Lembrar de mim</label>
                            </div>

                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-green btn-lg shadow-sm">
                                    ENTRAR
                                </button>
                            </div>

                            <div class="text-center mt-3">
                                <a href="#" class="text-decoration-none text-muted small">Esqueceu a senha?</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
