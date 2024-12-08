document.getElementById('open_btn').addEventListener('click', function(){
    document.getElementById('sidebar').classList.toggle('open-sidebar')
 });

// Selecionar todos os botões de "Adicionar ao carrinho"
const addToCartButtons = document.querySelectorAll(".button-hover-background");

// Função para adicionar um produto ao carrinho
function addToCart(productTitle, productPrice, productImage) {
  // Obter o carrinho atual do localStorage (ou criar um novo)
  let cart = JSON.parse(localStorage.getItem("cart")) || [];

  // Verificar se o produto já existe no carrinho
  const existingProduct = cart.find(item => item.title === productTitle);

  if (existingProduct) {
    // Se o produto já existir, aumentar a quantidade
    existingProduct.quantity += 1;
  } else {
    // Adicionar um novo produto ao carrinho
    cart.push({
      title: productTitle,
      price: productPrice,
      image: productImage,
      quantity: 1
    });
  }

  // Atualizar o localStorage
  localStorage.setItem("cart", JSON.stringify(cart));

  // Notificar o usuário
  alert(`${productTitle} foi adicionado ao carrinho!`);
}

// Adicionar evento a cada botão
addToCartButtons.forEach(button => {
  button.addEventListener("click", event => {
    const productCard = event.target.closest(".menu-item"); // Seleciona o card do produto
    if (productCard) {
      const productTitle = productCard.querySelector(".product-title").textContent;
      const productPrice = productCard.querySelector(".product-price").textContent;
      const productImage = productCard.querySelector(".product-image").src;

      // Chamar a função para adicionar ao carrinho
      addToCart(productTitle, productPrice, productImage);
    }
  });
});
