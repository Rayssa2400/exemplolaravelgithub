<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bar do Caldo</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('css/contato.css') }}">
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
                        <span class="item-descricao">
                            Inicio
                        </span>
                    </a>
                </li>
                <li class="side_item">
                    <a href="{{ url('cardapio') }}">
                        <i class="fa-solid fa-utensils"></i>
                        <span class="item-descricao">
                            Cardápio
                        </span>
                    </a>
                </li>
                <li class="side_item">
                    <a href="{{ url('carrinho') }}">
                        <i class="fa-solid fa-cart-shopping"></i>
                        <span class="item-descricao">
                            Carrinho
                        </span>
                    </a>
                </li>
                <li class="side_item">
                    <a href="{{ url('contato') }}">
                        <i class="fa-solid fa-phone"></i>
                        <span class="item-descricao">
                            Contato
                        </span>
                    </a>
                </li>
            </ul>

            <button id="open_btn">
                <i id="open_btn_icon" class="fa-solid fa-chevron-right"></i>
            </button>
        </div>
    </nav>

    <div class="main-content">
        <section id="inicio">
            <img src="" alt="">
            <div class="topo">
                <div class="bd-example m-0 border-0">
                    <ul class="nav me-auto">
                        <p class="display-6">Contato</p>
                    </ul>
                </div>
            </div>
        </section>
        <div class="content-wrapper">
            <div class="contact-form">
                <form action="{{ route('feedback.store') }}" method="POST">
                    @csrf
                    <div>
                        <label for="mensagem">Sua Mensagem</label>
                        <textarea name="mensagem" id="mensagem" rows="5" required></textarea>
                    </div>

                    <button type="submit">Enviar Mensagem</button>

                    @if(session('success'))
                        <p>{{ session('success') }}</p>
                    @endif
                </form>

            </div>
            <div class="contact-info">
                <p class="address">
                    Sítio Itapacúra, 26<br>
                    Espírito Santo - Rio Grande do Norte, CEP: 59180-000
                </p>
                <hr>
                <p>Email: <a href="mailto:bar.caldo@gmail.com">bar.caldo@gmail.com</a></p>
                <p>Celular: <a href="tel:+5584988757467">(84) 98875-7467</a></p>
                <p>Telefone: <a href="tel:+5584994125715">(84) 99412-5715</a></p>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
