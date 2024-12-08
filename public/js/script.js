document.getElementById('open_btn').addEventListener('click', function(){
    document.getElementById('sidebar').classList.toggle('open-sidebar')
 });

// Array para armazenar os produtos no carrinho
let carrinho = [];

// Função para adicionar produto ao carrinho
function adicionarAoCarrinho(nome, preco) {
  carrinho.push({ nome, preco });
  atualizarCarrinho();
}

// Função para atualizar a exibição do carrinho
function atualizarCarrinho() {
  const listaCarrinho = document.getElementById('itens-carrinho');
  const totalElement = document.getElementById('total');

  // Limpar lista de itens
  listaCarrinho.innerHTML = '';

  // Adicionar itens ao carrinho
  let total = 0;
  carrinho.forEach(item => {
    const li = document.createElement('li');
    li.textContent = `${item.nome} - R$ ${item.preco.toFixed(2)}`;
    listaCarrinho.appendChild(li);
    total += item.preco;
  });

  // Atualizar o total
  totalElement.textContent = `Total: R$ ${total.toFixed(2)}`;
}

// Função para finalizar a compra
document.getElementById('finalizar').addEventListener('click', function() {
  if (carrinho.length === 0) {
    alert('O carrinho está vazio!');
  } else {
    alert('Compra finalizada com sucesso!');
    carrinho = []; // Limpar o carrinho
    atualizarCarrinho(); // Atualizar exibição do carrinho
  }
});

// Adicionar evento para os botões de adicionar ao carrinho
const botoesAdicionar = document.querySelectorAll('.adicionar');
botoesAdicionar.forEach(button => {
  button.addEventListener('click', function() {
    const nomeProduto = button.getAttribute('data-produto');
    const precoProduto = parseFloat(button.getAttribute('data-preco'));
    adicionarAoCarrinho(nomeProduto, precoProduto);
  });
});
