<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Feedback;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ClienteController extends Controller
{
    // Exibe o formulário de cadastro
        public function showContactForm()
    {
        return view('contato');
    }
        public function showRegisterForm()
    {
        return view('cadastro');
    }


    // Lida com o cadastro
    public function register(Request $request)
    {
        $request->validate([
            'cpf' => ['required', 'string', 'max:14', 'unique:clientes,cpf'],
            'nome' => ['required', 'string', 'max:100'],
            'email' => ['required', 'email', 'max:100', 'unique:clientes,email'],
            'telefone' => ['nullable', 'string', 'max:15'],
            'senha' => ['required', 'string', 'min:6', 'confirmed'],
        ]);

        Cliente::create([
            'cpf' => $request->cpf,
            'nome' => $request->nome,
            'email' => $request->email,
            'telefone' => $request->telefone,
            'senha' => Hash::make($request->senha), // Criptografa a senha antes de salvar
        ]);

        return redirect()->route('entrar')->with('success', 'Cadastro realizado com sucesso!');
    }

    // Exibe o formulário de login
    public function showLoginForm()
    {
        return view('entrar');
    }

    // Lida com o login
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'senha' => 'required',
        ]);

        $cliente = Cliente::where('email', $request->email)->first();

        if ($cliente && Hash::check($request->senha, $cliente->senha)) {
            Auth::login($cliente); // Autentica o cliente
            return redirect()->route('feedback.index')->with('success', 'Bem-vindo!');
        }

        return back()->withErrors(['email' => 'Credenciais inválidas.']);
    }

    // Atualiza a senha
    public function updatePassword(Request $request)
    {
        $request->validate([
            'senha_atual' => 'required',
            'nova_senha' => 'required|string|min:6|confirmed',
        ]);

        $cliente = Auth::user(); // Obtém o cliente autenticado

        if (!Hash::check($request->senha_atual, $cliente->senha)) {
            return back()->withErrors(['senha_atual' => 'Senha atual incorreta.']);
        }

        $cliente->update([
            'senha' => Hash::make($request->nova_senha),
        ]);

        return redirect()->route('feedback.index')->with('success', 'Senha atualizada com sucesso!');
    }

    // Exibe o formulário de envio de mensagens
    public function showFeedbackForm()
    {
        return view('feedback.create');
    }

    // Processa e salva a mensagem enviada pelo cliente
    public function handleContactForm(Request $request)
{
    // Valida a mensagem
    $request->validate([
        'mensagem' => 'required|string|max:500',
    ]);

    // Cria o feedback
    Feedback::create([
        'user_id' => auth()->id(),  // Obtém o ID do usuário logado
        'mensagem' => $request->mensagem,  // Mensagem enviada pelo formulário
    ]);

    // Redireciona com uma mensagem de sucesso
    return redirect()->route('contato.store')->with('success', 'Mensagem enviada com sucesso!');
}



    // Lista as mensagens enviadas pelo cliente
    public function indexFeedback()
    {
        $feedbacks = Feedback::where('user_id', Auth::id())->get();
        return view('feedback.index', compact('feedbacks'));
    }
}
