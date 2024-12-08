document.getElementById('open_btn').addEventListener('click', function(){
    document.getElementById('sidebar').classList.toggle('open-sidebar')
  });
  document.addEventListener("DOMContentLoaded", function() {
    // Função para renderizar o carrinho vazio
    function renderEmptyCart() {
      const cartContainer = document.getElementById('cart-container');
        cartContainer.innerHTML = `
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css" rel="stylesheet">
        <link rel="stylesheet" href="carrin.css">
        <style>

        .empty-cart {
        background-color: #fff;
        text-align: center;
        padding: 20px;
        }

        .cart-icon i {
        font-size: 100px;
        color: #333;
        }

        h2 {
        margin-top: 20px;
        font-size: 24px;
        font-weight: bold;
        color: #333;
        }

        p {
        font-size: 16px;
        color: #555;
        }

        .go-to-menu {
        display: inline-block;
        margin-top: 5px;
        font-size: 16px;
        color: #ffcc00;
        text-decoration: none;
        }

        .go-to-menu:hover {
        text-decoration: underline;
        }
    </style>
        <div class="empty-cart">
            <div class="cart-icon">
            <i class="bi bi-emoji-neutral" style="font-size: 100px;"></i>
            </div>
            <h2>Nada em seu carrinho</h2>
            <p>Nenhum produto foi adicionado ao seu carrinho.</p>
            <a href="cardapio" class="go-to-menu">Ir para o cardápio</a>
        </div>
    `;

    }

    // Função para renderizar o carrinho com itens
    function renderCartWithItems(cart) {
      const cartContainer = document.getElementById('cart-container');
      let total = 0;

      const cartItemsHTML = cart.map((item, index) => {
        const itemTotal = parseFloat(item.price.replace("R$", "").replace(",", ".")) * item.quantity;
        total += itemTotal;

        return `
          <tr class="cart-product">
            <td class="product-identification">
              <img src="${item.image}" alt="${item.title}" class="cart-product-image">
              <strong class="cart-product-title">${item.title}</strong>
            </td>
            <td><span class="cart-product-price">${item.price}</span></td>
            <td>
              <input type="number" value="${item.quantity}" min="0" class="product-qtd-input" data-index="${index}">
              <button type="button" class="remove-product-button" data-index="${index}"><i class="fa-solid fa-trash"></i></button>
            </td>
          </tr>
        `;
      }).join("");


      cartContainer.innerHTML = `
        <table class="cart-table">
          <thead>
            <tr>
              <th>Produtos</th>
            </tr>
          </thead>
          <tbody>
            ${cartItemsHTML}
          </tbody>
          <tfoot>
            <tr>
              <td colspan="3" class="cart-total-container">
                <strong>Total:</strong>
                <span id="cart-total">R$${total.toFixed(2).replace(".", ",")}</span>
              </td>
            </tr>
          </tfoot>
        </table>
        <button type="button" class="purchase-button">Finalizar Compra</button>
        <button class="add-more-items-button">Adicionar Mais Itens</button>
      `;
    }

    // Função para atualizar o carrinho na interface
    function updateCartDisplay() {
      const cart = JSON.parse(localStorage.getItem("cart")) || [];

      if (cart.length === 0) {
        renderEmptyCart(); // Renderizar carrinho vazio
      } else {
        renderCartWithItems(cart); // Renderizar carrinho com itens
      }

      addEventListeners(); // Chama a função de adicionar os eventos após o conteúdo ser atualizado
    }

    // Função para remover um produto do carrinho
    function removeProduct(index) {
      let cart = JSON.parse(localStorage.getItem("cart")) || [];
      cart.splice(index, 1); // Remove o item do carrinho
      localStorage.setItem("cart", JSON.stringify(cart));
      updateCartDisplay(); // Atualiza o carrinho após remoção
    }

    // Função para alterar a quantidade de um produto
    function changeQuantity(index, quantity) {
      let cart = JSON.parse(localStorage.getItem("cart")) || [];
      if (quantity <= 0) {
        removeProduct(index); // Se a quantidade for 0 ou menos, remove o item
      } else {
        cart[index].quantity = quantity;
        localStorage.setItem("cart", JSON.stringify(cart));
        updateCartDisplay(); // Atualiza o carrinho após alteração
      }
    }

    // Função para finalizar a compra
    function finalizePurchase() {
      const cart = JSON.parse(localStorage.getItem("cart")) || [];

      if (cart.length === 0) {
        alert("Seu carrinho está vazio. Adicione produtos antes de finalizar a compra.");
        return;
      }

      alert("Compra finalizada com sucesso! Obrigado por comprar conosco.");
      localStorage.removeItem("cart"); // Limpar carrinho após compra
      updateCartDisplay(); // Atualizar carrinho após finalização
    }

    // Função para adicionar mais itens ao carrinho (redirige para o cardápio)
    function addMoreItems() {
      window.location.href = 'cardapio.html'; // Redireciona para a página do cardápio
    }

    // Adiciona eventos aos botões
    function addEventListeners() {
      // Evento de clique para remover produto
      const removeButtons = document.querySelectorAll(".remove-product-button");
      removeButtons.forEach(button => {
        button.addEventListener("click", (e) => {
          const index = e.target.dataset.index;
          removeProduct(index);
        });
      });

      // Evento de mudança na quantidade do produto
      const quantityInputs = document.querySelectorAll(".product-qtd-input");
      quantityInputs.forEach(input => {
        input.addEventListener("input", (e) => {
          const index = e.target.dataset.index;
          const quantity = parseInt(e.target.value);
          changeQuantity(index, quantity);
        });
      });

      // Evento de clique para finalizar compra
      const finalizeButton = document.querySelector(".purchase-button");
      if (finalizeButton) {
        finalizeButton.addEventListener("click", finalizePurchase);
      }

      // Evento de clique para adicionar mais itens
      const addMoreButton = document.querySelector(".add-more-items-button");
      if (addMoreButton) {
        addMoreButton.addEventListener("click", addMoreItems);
      }
    }

    // Inicializa o carrinho e adiciona os eventos
    updateCartDisplay();
  });
