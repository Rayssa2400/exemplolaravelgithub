<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bar do Caldo</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Usando asset() para carregar o CSS corretamente -->
    <link rel="stylesheet" href="{{ asset('css/cadastro.css') }}">
    <style>
        /* Estilos gerais */
        body {
    font-family: 'Roboto', sans-serif;
    margin: 0;
    padding: 0;
    background-color: #ffffff;
    display: flex;
}


#sidebar{
    display: flex;
    flex-direction: column ;
    justify-content: space-between;
    background-color: #f5c1749f;
    height: auto;
    overflow-y: auto;
    position: relative;
    transition: all .4s;
    min-width: 90px;
}

#sidebar_content{
    padding: 12px;
}

#user_infos{
    display: flex;
    flex-direction: column;
}

#side_items{
    display: flex;
    flex-direction: column;
    gap: 8px;
    list-style: none;
}

.side_item{
    border-radius: 8px;
    cursor: pointer;
    padding: 20px;
    margin-left: -30px;

}

.side_item:hover{
    background-color: aliceblue;
}

.side_item a{
    text-decoration: none;
    display: flex;
    align-items: center;
    justify-content: center;
    color: black;
}

.side_item a i {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 20px;
    height: 20px;
}

#open_btn{
    position: absolute;
    top: 30px;
    right: -10px;
    background-color: aliceblue;
    color: #f5c1749f;
    border-radius: 100%;
    width: 20px;
    height: 20px;
    border: none;
    cursor: pointer;
}

#open_btn_icon{
    transform: transform .3s ease;
}

.open-sidebar #open_btn_icon{
    transform: rotate(180deg)
}

.item-descricao{
    width: 0px;
    overflow: hidden;
    white-space: nowrap;
    text-overflow: ellipsis;
    font-size: 14px;
    transition: width .6s;
    height: 0px;
}

#sidebar.open-sidebar{
    min-width: 15%;
}

#sidebar.open-sidebar .item-descricao{
    width: 150px;
    height: auto;
}

#sidebar.open-sidebar .side_item a {
    justify-content: flex-start;
    gap: 14px;
}

/* Área principal */
.main-content {
    margin-top: 120px; /* Compensa a altura do header */
    padding: 20px;
    width: 100%;
}

.header {
    background: linear-gradient(to bottom, #ff0303, yellow);
    color: #000000; /* Cor do texto */
    padding: 20px; /* Espaçamento interno */
    text-align: left; /* Alinhamento do texto */
    top: 0; /* Faz o header ir para o topo */
    width: 100%; /* Ajusta a largura para preencher toda a tela */
    height: 100px; /* Altura do header */
    margin: 0; /* Remove margens desnecessárias */
    position: fixed; /* Fixa o header no topo */
    display: flex;
    flex-direction: column; /* Para estruturar conteúdo interno */
    margin-left: -20px;

}

.form-container {
    background-color: #fffaf1;
    padding: 20px;
    border-radius: 8px;
    width: 100%;
    height: 100%;
    max-width: 400px;
    margin: 0 auto;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.form-container h2 {
    text-align: center;
    font-size: 20px;
    margin-bottom: 20px;
}

/* Campos do formulário */
.form-container form input {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 5px;
    background-color: #e9e9e9;
}

.form-container form button {
    background: linear-gradient(to bottom, #f96d00, #ffcc33);
    border: none;
    color: white;
    padding: 10px;
    font-size: 16px;
    font-weight: bold;
    cursor: pointer;
    border-radius: 5px;
    text-transform: uppercase;
    width: 100%;
}

.form-container form button:hover {
    opacity: 0.9;
}

/* Responsividade */
@media (max-width: 768px) {
    #sidebar {
        width: 100%;
        position: absolute;
        z-index: 10;
    }

    .main-content {
        width: 100%;
        padding: 10px;
    }

    .form-container {
        width: 90%;
    }
}
    </style>
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

    <div class="main-content" id="mainContent">
        <div class="header">
            <h1>Cadastro de Usuários</h1>
        </div>
        <div class="form-container">
            <h2>Cadastre uma conta</h2>
            <form action="{{ route('cadastro') }}" method="POST">
    @csrf
    <input type="text" name="cpf" placeholder="CPF" required>
    <input type="text" name="nome" placeholder="Nome" required>
    <input type="email" name="email" placeholder="Email" required>
    <input type="text" name="telefone" placeholder="Telefone">
    <input type="password" name="senha" placeholder="Senha" required>
    <input type="password" name="senha_confirmation" placeholder="Confirmar Senha" required>
    <button type="submit">Cadastrar</button>
</form>

        </div>
    </div>

    <script src="{{ asset('js/script.js') }}"></script>

</body>

</html>
