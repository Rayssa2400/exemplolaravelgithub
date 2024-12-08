<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entrar</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('css/entrar.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <nav id="sidebar">
        <div id="sidebar_content">
            <div id="user">
                <p id="user_infos">
                    <span class="item-descricao"></span>
                </p>
            </div>

            <ul id="side_items">
                <li class="side_item">
                    <a href="{{ url('paginainicial') }}">
                        <i class="fa-solid fa-house"></i>
                        <span class="item-descricao">Início</span>
                    </a>
                </li>
                <li class="side_item">
                    <a href="{{ url('cardapio') }}">
                        <i class="fa-solid fa-utensils"></i>
                        <span class="item-descricao">Cardápio</span>
                    </a>
                </li>
                <li class="side_item">
                    <a href="{{ url('carrinho') }}">
                        <i class="fa-solid fa-cart-shopping"></i>
                        <span class="item-descricao">Carrinho</span>
                    </a>
                </li>
                <li class="side_item">
                    <a href="{{ url('contato') }}">
                        <i class="fa-solid fa-phone"></i>
                        <span class="item-descricao">Contato</span>
                    </a>
                </li>
            </ul>

            <button id="open_btn">
                <i id="open_btn_icon" class="fa-solid fa-chevron-right"></i>
            </button>
        </div>
    </nav>

    <section id="inicio">
        <div class="topo">
            <div class="bd-example m-0 border-0">
                <ul class="nav me-auto">
                    <p class="display-6">Entrar</p>
                </ul>
            </div>
        </div>

        <!-- Main Content -->
        <div class="main-content">
            <!-- Formulário de Login -->
            <div class="login-box">
                <h2>Acesse sua conta</h2>
                <div class="user-icon">
                    <i class="fa fa-user"></i>
                    <i class="bi bi-person" style="font-size: 100px;"></i>
                </div>
                <form action="{{ route('entrar') }}" method="POST">
                    @csrf
                    <input type="email" name="email" placeholder="Email" required>
                    <input type="password" name="senha" placeholder="Senha" required>
                    <button type="submit">Entrar</button>
                </form>

                <p>OU</p>
                <a href="{{ url('cadastro') }}" class="btn-register">CADASTRE-SE</a>
            </div>
        </div>

        <div class="alert alert-danger">{{ session('error') }}</div>

    </section>

    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
