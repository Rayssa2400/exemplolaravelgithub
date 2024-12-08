<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bar do Caldo</title>
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
          integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
          crossorigin="anonymous" referrerpolicy="no-referrer">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Estilos -->
    <link rel="stylesheet" href="{{ asset('css/cardapio.css') }}">
</head>
<body>
    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

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

    <main>
        <section id="inicio">
            <img src="" alt="">
            <div class="topo">
                <div class="bd-example m-0 border-0">
                    <ul class="nav me-auto">
                        <p class="display-6">Cardápio</p>
                    </ul>
                </div>
            </div>
        </section>

        <section class="menu-list">
            <details>
              <summary>Adicionais</summary>
              <div class="menu-item">
                  <img src="https://saude.mpu.mp.br/nutricao/receitas/imagens/Feijaonutritivo.png" alt="Feijao" class="product-image">
                  <div class="products-container">
                      <div class="movie-product">
                        <strong class="product-title">Feijão</strong>
                        <p>Uma porção de feijão: carioca, preto e branco</p>
                        <span class="product-price">R$6,00</span>
                        <div class="product-price-container">
                          <button type="button" class="button-hover-background"> <i class="fa-solid fa-cart-shopping"></i></button>
                        </div>
                      </div>
                      <!-- Repetir para outros produtos -->
                  </div>
              </div>

              <div class="menu-item">
                  <img src="https://www.receitasnestle.com.br/sites/default/files/styles/full_width_image_1920x795_/public/oembed_thumbnails/lq07zLiQxEliliRlsr9SeYGdB3D_IWC1Muzsvh7WBZE.jpg?itok=r-IlbvvZ" alt="Feijao" class="product-image">
                  <div class="products-container">
                      <div class="movie-product">
                        <strong class="product-title">Arroz</strong>
                        <p>Uma porção de arroz: branco e refogado</p>
                        <span class="product-price">R$6,00</span>
                        <div class="product-price-container">
                          <button type="button" class="button-hover-background"> <i class="fa-solid fa-cart-shopping"></i></button>
                        </div>
                      </div>
                      <!-- Repetir para outros produtos -->
                  </div>
              </div>

              <div class="menu-item">
                  <img src="https://www.comidaereceitas.com.br/wp-content/uploads/2010/03/Macaxeira_cozidaa.jpg" alt="Feijao" class="product-image">
                  <div class="products-container">
                      <div class="movie-product">
                        <strong class="product-title">Macaxeira</strong>
                        <p>Uma porção de macaxeira cozida</p>
                        <span class="product-price">R$6,00</span>
                        <div class="product-price-container">
                          <button type="button" class="button-hover-background"> <i class="fa-solid fa-cart-shopping"></i></button>
                        </div>
                      </div>
                      <!-- Repetir para outros produtos -->
                  </div>
              </div>

              <div class="menu-item">
                  <img src="https://img.estadao.com.br/resources/jpg/8/1/1513810007518.jpg" alt="Feijao" class="product-image">
                  <div class="products-container">
                      <div class="movie-product">
                        <strong class="product-title">Farofa</strong>
                        <p>Uma porção de farofa</p>
                        <span class="product-price">R$6,00</span>
                        <div class="product-price-container">
                          <button type="button" class="button-hover-background"> <i class="fa-solid fa-cart-shopping"></i></button>
                        </div>
                      </div>
                      <!-- Repetir para outros produtos -->
                  </div>
              </div>
            </details>

            <details>
            <summary>Pratos</summary>
            <div class="menu-item">
              <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEiBCxAjrg2RMvQGQzid-ADoF_Plcamp15Qr8XmZA2liQokr0XzIeze4fWEhrSpH-Nz7HWMoPkTLc8SVMDSeHIvkaeGE7d8zbqPBMFebCUlOeB5bJjuRFbTgdOMdgdxvGaGX_f_d2TkuBg8/s320/Festival+de+Galinha+Caipira.jpg" alt="Feijao" class="product-image">
              <div class="products-container">
                  <div class="movie-product">
                    <strong class="product-title">Galinha Caipira</strong>
                    <p>Galinha caipira cozida acompanhada com pirão, arroz, macaxeira, feijão e vinagrete</p>
                    <span class="product-price">R$180,00</span>
                    <div class="product-price-container">
                    <button type="button" class="button-hover-background"> <i class="fa-solid fa-cart-shopping"></i></button>
                    </div>
                  </div>
                  <!-- Repetir para outros produtos -->
              </div>
          </div>
          <div class="menu-item">
              <img src="https://espetinhodesucesso.com/wp-content/uploads/2022/03/Como-fazer-peixe-frito-inteiro.jpg" alt="Feijao" class="product-image">
              <div class="products-container">
                  <div class="movie-product">
                    <strong class="product-title">Peixe</strong>
                    <p>Peixe frito acompanhado com arroz, macaxeira, feijão e vinagrete</p>
                    <span class="product-price">R$50,00</span>
                    <div class="product-price-container">
                    <button type="button" class="button-hover-background"> <i class="fa-solid fa-cart-shopping"></i></button>
                    </div>
                  </div>
                  <!-- Repetir para outros produtos -->
              </div>
          </div>
          <div class="menu-item">
              <img src="https://minervafoods.com/wp-content/uploads/2022/12/alcatra_na_frigideira_com_batata-1.jpg" alt="Feijao" class="product-image">
              <div class="products-container">
                  <div class="movie-product">
                    <strong class="product-title">Carne</strong>
                    <p>Peixe frito acompanhado com arroz, macaxeira, feijão e vinagrete</p>
                    <span class="product-price">R$50,00</span>
                    <div class="product-price-container">
                    <button type="button" class="button-hover-background"> <i class="fa-solid fa-cart-shopping"></i></button>
                    </div>
                  </div>
                  <!-- Repetir para outros produtos -->
              </div>
          </div>
          <div class="menu-item">
              <img src="https://melepimenta.com/wp-content/uploads/2022/01/Frango-frito-Baixa-2.jpg" alt="Feijao" class="product-image">
              <div class="products-container">
                  <div class="movie-product">
                    <strong class="product-title">Frango</strong>
                    <p>Frango frito acopanhado com arroz, macaxeira, feijão e vinagrete</p>
                    <span class="product-price">R$50,00</span>
                    <div class="product-price-container">
                    <button type="button" class="button-hover-background"> <i class="fa-solid fa-cart-shopping"></i></button>
                    </div>
                  </div>
                  <!-- Repetir para outros produtos -->
              </div>
          </div>
      </details>

            <details>
                <summary>Carnes</summary>
                <div class="menu-item">
                  <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEiBCxAjrg2RMvQGQzid-ADoF_Plcamp15Qr8XmZA2liQokr0XzIeze4fWEhrSpH-Nz7HWMoPkTLc8SVMDSeHIvkaeGE7d8zbqPBMFebCUlOeB5bJjuRFbTgdOMdgdxvGaGX_f_d2TkuBg8/s320/Festival+de+Galinha+Caipira.jpg" alt="Feijao" class="product-image">
                  <div class="products-container">
                      <div class="movie-product">
                        <strong class="product-title">Galinha Caipira</strong>
                        <p>Galinha Caipira cozida sem acompanhamentos</p>
                        <span class="product-price">R$100,00</span>
                        <div class="product-price-container">
                        <button type="button" class="button-hover-background"> <i class="fa-solid fa-cart-shopping"></i></button>
                        </div>
                      </div>
                      <!-- Repetir para outros produtos -->
                  </div>
              </div>
              <div class="menu-item">
                  <img src="https://espetinhodesucesso.com/wp-content/uploads/2022/03/Como-fazer-peixe-frito-inteiro.jpg" alt="Feijao" class="product-image">
                  <div class="products-container">
                      <div class="movie-product">
                        <strong class="product-title">Peixe</strong>
                        <p>Peixe frito sem acompanhamentos </p>
                        <span class="product-price">R$30,00</span>
                        <div class="product-price-container">
                        <button type="button" class="button-hover-background"> <i class="fa-solid fa-cart-shopping"></i></button>
                        </div>
                      </div>
                      <!-- Repetir para outros produtos -->
                  </div>
              </div>
              <div class="menu-item">
                  <img src="https://minervafoods.com/wp-content/uploads/2022/12/alcatra_na_frigideira_com_batata-1.jpg" alt="Feijao" class="product-image">
                  <div class="products-container">
                      <div class="movie-product">
                        <strong class="product-title">Carne</strong>
                        <p>Carne frita sem acompanhamentos  </p>
                        <span class="product-price">R$30,00</span>
                        <div class="product-price-container">
                        <button type="button" class="button-hover-background"> <i class="fa-solid fa-cart-shopping"></i></button>
                        </div>
                      </div>
                      <!-- Repetir para outros produtos -->
                  </div>
              </div>
              <div class="menu-item">
                  <img src="https://melepimenta.com/wp-content/uploads/2022/01/Frango-frito-Baixa-2.jpg" alt="Feijao" class="product-image">
                  <div class="products-container">
                      <div class="movie-product">
                        <strong class="product-title">Frango</strong>
                        <p>Frango frito sem acompanhamentos </p>
                        <span class="product-price">R$30,00</span>
                        <div class="product-price-container">
                        <button type="button" class="button-hover-background"> <i class="fa-solid fa-cart-shopping"></i></button>
                        </div>
                      </div>
                      <!-- Repetir para outros produtos -->
                  </div>
              </div>
            </details>

            <details>
                <summary>Caldos</summary>
                <div class="menu-item">
                  <img src="https://comidinhasdochef.com/wp-content/webp-express/webp-images/doc-root/wp-content/uploads/2018/06/Caldo-de-Peixe.jpg.webp" alt="Feijao" class="product-image">
                  <div class="products-container">
                      <div class="movie-product">
                        <strong class="product-title">Caldo de peixe</strong>
                        <span class="product-price">R$10,00</span>
                        <div class="product-price-container">
                        <button type="button" class="button-hover-background"> <i class="fa-solid fa-cart-shopping"></i></button>
                        </div>
                      </div>
                      <!-- Repetir para outros produtos -->
                  </div>
              </div>
              <div class="menu-item">
                  <img src="https://clubedereceitas.com.br/wp-content/webp-express/webp-images/uploads/2024/06/receita-de-caldo-de-mocoto.jpg.webp" alt="Feijao" class="product-image">
                  <div class="products-container">
                      <div class="movie-product">
                        <strong class="product-title">Caldo de mocotó</strong>
                        <span class="product-price">R$10,00</span>
                        <div class="product-price-container">
                        <button type="button" class="button-hover-background"> <i class="fa-solid fa-cart-shopping"></i></button>
                        </div>
                      </div>
                      <!-- Repetir para outros produtos -->
                  </div>
              </div>
              <div class="menu-item">
                  <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhIHyzSV56_m7MKjLPdTKUjJoNwnoY0OpV98gEmlw-CQ91tCOKd1BuW7JL5VoaR3Jc6gTOai1ykWyA5GnZD3x2eKOa8iIfgySaLx3MDYsKFKOetqdAlht2wfpwggyiXJx8OlBYRmEhikBpm/s320/fava%255B1%255D.jpg" alt="Feijao" class="product-image">
                  <div class="products-container">
                      <div class="movie-product">
                        <strong class="product-title">Caldo de fava</strong>
                        <span class="product-price">R$10,00</span>
                        <div class="product-price-container">
                        <button type="button" class="button-hover-background"> <i class="fa-solid fa-cart-shopping"></i></button>
                        </div>
                      </div>
                      <!-- Repetir para outros produtos -->
                  </div>
              </div>
              <div class="menu-item">
                  <img src="https://cdn.casaeculinaria.com/wp-content/uploads/2023/03/22103609/Caldinho-de-camarao-1-600x400.webp" alt="Feijao" class="product-image">
                  <div class="products-container">
                      <div class="movie-product">
                        <strong class="product-title">Caldo de camarão</strong>
                        <span class="product-price">R$10,00</span>
                        <div class="product-price-container">
                        <button type="button" class="button-hover-background"> <i class="fa-solid fa-cart-shopping"></i></button>
                        </div>
                      </div>
                      <!-- Repetir para outros produtos -->
                  </div>
              </div>
            </details>

              <details>
                <summary>Porções</summary>
                <div class="menu-item">
                  <img src="https://static.wixstatic.com/media/a037bb_95c9809d8f2a466784365ba9acfa698e~mv2.jpg/v1/fill/w_497,h_420,al_c,q_80,usm_0.66_1.00_0.01,enc_auto/a037bb_95c9809d8f2a466784365ba9acfa698e~mv2.jpg" alt="Feijao" class="product-image">
                  <div class="products-container">
                      <div class="movie-product">
                        <strong class="product-title">Batata Frita</strong>
                        <span class="product-price">R$15,00</span>
                        <div class="product-price-container">
                        <button type="button" class="button-hover-background"> <i class="fa-solid fa-cart-shopping"></i></button>
                        </div>
                      </div>
                      <!-- Repetir para outros produtos -->
                  </div>
              </div>
              <div class="menu-item">
                  <img src="https://static.codepill.com.br/domains/7e4e09e5-31af-44d5-bd1e-428319709832/products/gallery_b7cdfcde-0082-4b0d-9e92-bd34d9bc393b.jpg" alt="Feijao" class="product-image">
                  <div class="products-container">
                      <div class="movie-product">
                        <strong class="product-title">Batata Frita com Calabresa</strong>
                        <span class="product-price">R$30,00</span>
                        <div class="product-price-container">
                        <button type="button" class="button-hover-background"> <i class="fa-solid fa-cart-shopping"></i></button>
                        </div>
                      </div>
                      <!-- Repetir para outros produtos -->
                  </div>
              </div>
            </details>

            <details>
              <summary>Bebidas</summary>

              <!-- Subcategoria: Águas -->
              <details>
                  <summary>Águas</summary>
                  <div class="menu-item">
                      <img src="https://static.paodeacucar.com/img/uploads/1/132/11825132.jpg" alt="Feijao" class="product-image">
                      <div class="products-container">
                          <div class="movie-product">
                            <strong class="product-title">Água Mineral</strong>
                            <p>Garrafa de água mineral, 500ml </p>
                            <span class="product-price">R$2,00</span>
                            <div class="product-price-container">
                            <button type="button" class="button-hover-background"> <i class="fa-solid fa-cart-shopping"></i></button>
                            </div>
                          </div>
                          <!-- Repetir para outros produtos -->
                      </div>
                  </div>
                  <div class="menu-item">
                      <img src="https://choppbrahmaexpress.vtexassets.com/arquivos/ids/157912-800-800?v=638206377094100000&width=800&height=800&aspect=true" alt="Feijao" class="product-image">
                      <div class="products-container">
                          <div class="movie-product">
                            <strong class="product-title">Água com Gás</strong>
                            <p>Garrafa de água mineral com gás, 500ml </p>
                            <span class="product-price">R$3,00</span>
                            <div class="product-price-container">
                            <button type="button" class="button-hover-background"> <i class="fa-solid fa-cart-shopping"></i></button>
                            </div>
                          </div>
                          <!-- Repetir para outros produtos -->
                      </div>
                  </div>
              </details>

              <!-- Subcategoria: Sucos -->
              <details>
                  <summary>Sucos</summary>
                  <div class="menu-item">
                      <img src="https://www.citrosuco.com.br/wp-content/uploads/2022/02/THUMB-05.png" alt="Feijao" class="product-image">
                      <div class="products-container">
                          <div class="movie-product">
                            <strong class="product-title">Suco de Laranja</strong>
                            <p>Jarra de suco de laranja, 1L</p>
                            <span class="product-price">R$10,00</span>
                            <div class="product-price-container">
                            <button type="button" class="button-hover-background"> <i class="fa-solid fa-cart-shopping"></i></button>
                            </div>
                          </div>
                          <!-- Repetir para outros produtos -->
                      </div>
                  </div>
                  <div class="menu-item">
                      <img src="https://www.cardapio.donnagulla.com.br/wp-content/uploads/2023/06/l-00477dc916fd420ea05f768cdb678273.jpeg" alt="Feijao" class="product-image">
                      <div class="products-container">
                          <div class="movie-product">
                            <strong class="product-title">Suco de Cajá</strong>
                            <p>Jarra de suco de cajá, 1L</p>
                            <span class="product-price">R$10,00</span>
                            <div class="product-price-container">
                            <button type="button" class="button-hover-background"> <i class="fa-solid fa-cart-shopping"></i></button>
                            </div>
                          </div>
                          <!-- Repetir para outros produtos -->
                      </div>
                  </div>

                  <div class="menu-item">
                      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRYctL8dNhQYwXILtbhzaEH45Ci7c1ePiGCeQ&s" alt="Feijao" class="product-image">
                      <div class="products-container">
                          <div class="movie-product">
                            <strong class="product-title">Suco de Acerola</strong>
                            <p>Jarra de suco de acerola, 1L</p>
                            <span class="product-price">R$10,00</span>
                            <div class="product-price-container">
                            <button type="button" class="button-hover-background"> <i class="fa-solid fa-cart-shopping"></i></button>
                            </div>
                          </div>
                          <!-- Repetir para outros produtos -->
                      </div>
                  </div>
              </details>

              <!-- Subcategoria: Refrigerantes -->
              <details>
                <summary>Refrigerantes</summary>

                <!-- Opção Lata -->
                <details>
                  <summary>Lata</summary>
                  <div class="menu-item">
                      <img src="https://andinacocacola.vtexassets.com/arquivos/ids/158244-1600-auto?v=638628901095270000&width=1600&height=auto&aspect=true" alt="Feijao" class="product-image">
                      <div class="products-container">
                          <div class="movie-product">
                            <strong class="product-title">Coca-Cola</strong>
                            <p>Coca-Cola tradicional em lata, 350ml</p>
                            <span class="product-price">R$5,00</span>
                            <div class="product-price-container">
                            <button type="button" class="button-hover-background"> <i class="fa-solid fa-cart-shopping"></i></button>
                            </div>
                          </div>
                          <!-- Repetir para outros produtos -->
                      </div>
                  </div>
                  <div class="menu-item">
                      <img src="https://acdn.mitiendanube.com/stores/001/887/990/products/dd833718dbacd8b0ed6a933d8f07462c-db539dd79830d1f6f716928863329888-640-0.webp" alt="Feijao" class="product-image">
                      <div class="products-container">
                          <div class="movie-product">
                            <strong class="product-title">Guaraná</strong>
                            <p>Guaraná tradicional em lata, 350ml</p>
                            <span class="product-price">R$5,00</span>
                            <div class="product-price-container">
                            <button type="button" class="button-hover-background"> <i class="fa-solid fa-cart-shopping"></i></button>
                            </div>
                          </div>
                          <!-- Repetir para outros produtos -->
                      </div>
                  </div>
                  <div class="menu-item">
                      <img src="https://cdn.irmaospatrocinio.com.br/img/p/1/5/8/0/0/5/158005-large_default.jpg" alt="Feijao" class="product-image">
                      <div class="products-container">
                          <div class="movie-product">
                            <strong class="product-title">Pepsi</strong>
                            <p>Pepsi tradicional em lata, 350ml</p>
                            <span class="product-price">R$5,00</span>
                            <div class="product-price-container">
                            <button type="button" class="button-hover-background"> <i class="fa-solid fa-cart-shopping"></i></button>
                            </div>
                          </div>
                          <!-- Repetir para outros produtos -->
                      </div>
                  </div>
                </details>

                <!-- Opção 1 Litro -->
                <details>
                  <summary>1 Litro</summary>
                  <div class="menu-item">
                      <img src="https://carrefourbrfood.vtexassets.com/arquivos/ids/18900734/coca-cola-1-litro-1.jpg?v=637590176337130000" alt="Feijao" class="product-image">
                      <div class="products-container">
                          <div class="movie-product">
                            <strong class="product-title">Coca-Cola</strong>
                            <p>Coca-Cola tradicional em garrafa de 1 litro</p>
                            <span class="product-price">R$8,00</span>
                            <div class="product-price-container">
                            <button type="button" class="button-hover-background"> <i class="fa-solid fa-cart-shopping"></i></button>
                            </div>
                          </div>
                          <!-- Repetir para outros produtos -->
                      </div>
                  </div>
                  <div class="menu-item">
                      <img src="https://cdn.awsli.com.br/2610/2610989/produto/233534084/guarana-antarctica-pet-original-1l-ye8rcuexmh.png" alt="Feijao" class="product-image">
                      <div class="products-container">
                          <div class="movie-product">
                            <strong class="product-title">Guaraná</strong>
                            <p>Guaraná tradicional em garrafa de 1 litro</p>
                            <span class="product-price">R$8,00</span>
                            <div class="product-price-container">
                            <button type="button" class="button-hover-background"> <i class="fa-solid fa-cart-shopping"></i></button>
                            </div>
                          </div>
                          <!-- Repetir para outros produtos -->
                      </div>
                  </div>
                  <div class="menu-item">
                      <img src="https://farmaciasnissei.com.br/media/produtos/68665_400x400.webp" alt="Feijao" class="product-image">
                      <div class="products-container">
                          <div class="movie-product">
                            <strong class="product-title">Pepsi</strong>
                            <p>Pepsi tradicional em garrafa de 1 litro</p>
                            <span class="product-price">R$8,00</span>
                            <div class="product-price-container">
                            <button type="button" class="button-hover-background"> <i class="fa-solid fa-cart-shopping"></i></button>
                            </div>
                          </div>
                          <!-- Repetir para outros produtos -->
                      </div>
                  </div>
                </details>

                <!-- Opção 2 Litros -->
                <details>
                  <summary>2 Litros</summary>
                  <div class="menu-item">
                      <img src="https://static.paodeacucar.com/img/uploads/1/120/24982120.png" alt="Feijao" class="product-image">
                      <div class="products-container">
                          <div class="movie-product">
                            <strong class="product-title">Coca-Cola</strong>
                            <p>Coca-Cola tradicional em garrafa de 2 litro</p>
                            <span class="product-price">R$13,00</span>
                            <div class="product-price-container">
                            <button type="button" class="button-hover-background"> <i class="fa-solid fa-cart-shopping"></i></button>
                            </div>
                          </div>
                          <!-- Repetir para outros produtos -->
                      </div>
                  </div>
                  <div class="menu-item">
                      <img src="https://cdn.awsli.com.br/2500x2500/1847/1847175/produto/94341736/379fb1048a.jpg" alt="Feijao" class="product-image">
                      <div class="products-container">
                          <div class="movie-product">
                            <strong class="product-title">Guaraná</strong>
                            <p>Guaraná tradicional em garrafa de 2 litro</p>
                            <span class="product-price">R$13,00</span>
                            <div class="product-price-container">
                            <button type="button" class="button-hover-background"> <i class="fa-solid fa-cart-shopping"></i></button>
                            </div>
                          </div>
                          <!-- Repetir para outros produtos -->
                      </div>
                  </div>
                  <div class="menu-item">
                      <img src="https://imgs.extra.com.br/1505923625/1xg.jpg" alt="Feijao" class="product-image">
                      <div class="products-container">
                          <div class="movie-product">
                            <strong class="product-title">Pepsi</strong>
                            <p>Pepsi tradicional em garrafa de 2 litro</p>
                            <span class="product-price">R$13,00</span>
                            <div class="product-price-container">
                            <button type="button" class="button-hover-background"> <i class="fa-solid fa-cart-shopping"></i></button>
                            </div>
                          </div>
                          <!-- Repetir para outros produtos -->
                      </div>
                  </div>
                  <div class="menu-item">
                      <img src="https://homeparty.com.br/wp-content/uploads/fanta-laranja.jpg" alt="Feijao" class="product-image">
                      <div class="products-container">
                          <div class="movie-product">
                            <strong class="product-title">Fanta Laranja</strong>
                            <p>Fanta Laranja tradicional em garrafa de 2 litro</p>
                            <span class="product-price">R$13,00</span>
                            <div class="product-price-container">
                            <button type="button" class="button-hover-background"> <i class="fa-solid fa-cart-shopping"></i></button>
                            </div>
                          </div>
                          <!-- Repetir para outros produtos -->
                      </div>
                  </div>
                </details>
              </details>

              <!-- Subcategoria: Bebidas Alcoólicas -->
              <details>
                  <summary>Bebidas Alcoólicas</summary>
                  <div class="menu-item">
                      <img src="https://www.devassa.com.br/media/vshmlmdw/lata-350ml.webp" alt="Feijao" class="product-image">
                      <div class="products-container">
                          <div class="movie-product">
                            <strong class="product-title">Cerveja</strong>
                            <span class="product-price">R$10,00</span>
                            <div class="product-price-container">
                            <button type="button" class="button-hover-background"> <i class="fa-solid fa-cart-shopping"></i></button>
                            </div>
                          </div>
                          <!-- Repetir para outros produtos -->
                      </div>
                  </div>
                  <div class="menu-item">
                      <img src="https://www.imigrantesbebidas.com.br/img/bebida/images/products/full/4406-cachaca-pitu-lata-350ml.20230728152207.jpg?s=83f4e013d9cbef29592bf07e819dca4c" alt="Feijao" class="product-image">
                      <div class="products-container">
                          <div class="movie-product">
                            <strong class="product-title">Pitu</strong>
                            <span class="product-price">R$15,00</span>
                            <div class="product-price-container">
                            <button type="button" class="button-hover-background"> <i class="fa-solid fa-cart-shopping"></i></button>
                            </div>
                          </div>
                          <!-- Repetir para outros produtos -->
                      </div>
                  </div>
              </details>
            </details>
          </section>
    </main>
    <button onclick="window.location.href='{{ url('carrinho') }}'"
            class="btn btn-primary position-fixed bottom-0 end-0 m-4">
        <i class="fa-solid fa-cart-shopping"></i> Ver Carrinho
    </button>

    <script src="{{ asset('js/cardapio.js') }}"></script>
</body>
</html>
