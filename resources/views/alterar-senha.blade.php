<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alteração de Senha</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('css/alterar-senha.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        /* Reset básico */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Definições de fonte e cor de fundo */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
        }

        /* Sidebar */
        #sidebar {
            background-color: #2C3E50;
            color: white;
            position: fixed;
            top: 0;
            left: 0;
            width: 250px;
            height: 100vh;
            padding: 20px;
            transition: all 0.3s;
        }

        #sidebar_content {
            display: flex;
            flex-direction: column;
        }

        #sidebar .side_item {
            margin: 20px 0;
        }

        #sidebar .side_item a {
            color: white;
            text-decoration: none;
            display: flex;
            align-items: center;
        }

        #sidebar .side_item i {
            margin-right: 10px;
        }

        #sidebar .side_item:hover {
            background-color: #34495E;
            padding: 5px;
            border-radius: 5px;
        }

        #sidebar #open_btn {
            position: absolute;
            top: 20px;
            right: -40px;
            background-color: #34495E;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 50%;
        }

        #sidebar #open_btn_icon {
            font-size: 20px;
        }

        /* Main Content */
        .container {
            margin-left: 270px;  /* Para evitar sobrepor o sidebar */
            padding: 20px;
        }

        .topo {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .card {
            background-color: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .card h2 {
            text-align: center;
            margin-bottom: 20px;
            font-size: 24px;
            color: #333;
        }

        .icon img {
            width: 50px;
            height: 50px;
        }

        .form-label {
            font-size: 14px;
            font-weight: 600;
            color: #555;
        }

        .form-control {
            border-radius: 5px;
            border: 1px solid #ddd;
            padding: 10px;
            margin-bottom: 15px;
            width: 100%;
            box-sizing: border-box;
        }

        .form-control:focus {
            border-color: #3498db;
            outline: none;
        }

        .btn {
            background-color: #3498db;
            color: white;
            border: none;
            padding: 12px;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .btn:hover {
            background-color: #2980b9;
        }

        /* Responsividade */
        @media (max-width: 768px) {
            .container {
                margin-left: 0;
            }

            #sidebar {
                position: relative;
                width: 100%;
                height: auto;
            }

            #sidebar_content {
                flex-direction: row;
                justify-content: space-between;
            }

            #sidebar #open_btn {
                display: block;
                position: relative;
                right: 0;
            }
        }
    </style>
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <!-- Sidebar -->
    <nav id="sidebar">
        <div id="sidebar_content">
            <div id="user">
                <p id="user_infos">
                    <span class="item-descricao"></span>
                </p>
            </div>
            <ul id="side_items">
                <li class="side_item">
                    <a href="{{ url('paginaprincipal') }}">
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

    <!-- Main Content -->
    <div class="container">
        <div class="topo">
            <div class="bd-example m-0 border-0">
                <ul class="nav me-auto">
                    <p class="display-6">Recuperação de senha</p>
                </ul>
            </div>
            <div class="card">
                <h2>Alteração de Senha</h2>
                <div class="icon text-center mb-4">
                    <img src="https://img.icons8.com/ios-filled/50/ffffff/lock--v1.png" alt="lock icon">
                </div>

                <!-- Formulário -->
                <form action="{{ route('senha.alterar') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="current-password" class="form-label">Digite a senha atual:</label>
                        <input type="password" id="current-password" name="current_password" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="new-password" class="form-label">Nova senha:</label>
                        <input type="password" id="new-password" name="new_password" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="confirm-password" class="form-label">Confirme a nova senha:</label>
                        <input type="password" id="confirm-password" name="new_password_confirmation" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">CONFIRMAR</button>
                </form>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/alterar-senha.js') }}"></script>
</body>
</html>
