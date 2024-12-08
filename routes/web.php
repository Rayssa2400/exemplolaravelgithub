<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PaginainicialController;
use App\Http\Controllers\FeedbackController;

// Rotas de CRUD para Clientes e Pedidos
Route::resource('clientes', ClienteController::class);
Route::resource('pedidos', PedidoController::class);

// Rotas da Página Inicial e Contato
Route::get('/paginainicial', [PaginainicialController::class, 'paginainicial'])->name('paginainicial');
Route::get('/contato', [PageController::class, 'contato'])->name('contato');
Route::post('/contato', [ClienteController::class, 'handleContactForm'])->name('contato.store');


// Rotas do Carrinho e Cardápio
Route::get('/carrinho', [PageController::class, 'carrinho'])->name('carrinho');
Route::get('/cardapio', [PageController::class, 'cardapio'])->name('cardapio');

// Rotas de Autenticação para Clientes
Route::get('/entrar', [ClienteController::class, 'showLoginForm'])->name('entrar');
Route::post('/entrar', [ClienteController::class, 'login']);
Route::get('/cadastro', [ClienteController::class, 'showRegisterForm'])->name('cadastro');
Route::post('/cadastro', [ClienteController::class, 'register']);

// Rota para Atualização de Senha
Route::post('/alterar-senha', [ClienteController::class, 'updatePassword'])->name('senha.alterar');

// Rotas Protegidas (Acessíveis apenas para Clientes Autenticados)
Route::middleware(['auth'])->group(function () {
    Route::get('/feedback', [FeedbackController::class, 'index'])->name('feedback.index');
});


// Rota GET para exibir o formulário de feedback
Route::get('/feedback', [FeedbackController::class, 'show'])->name('feedback.show');

// Rota POST para processar o feedback (permitir envio mesmo sem estar logado)
Route::post('/feedback', [FeedbackController::class, 'store'])->name('feedback.store');



