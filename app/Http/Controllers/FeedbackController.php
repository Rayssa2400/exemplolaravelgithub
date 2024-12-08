<?php
namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    // Exibir o formulário de feedback
    public function show()
    {
        return view('feedback.form');  // Ajuste para a sua visão real
    }

    // Processar o feedback enviado
    public function store(Request $request)
    {
        if (!auth()->check()) {
            return redirect()->route('entrar')->with('error', 'Você precisa estar logado para enviar um feedback.');
        }

        // Continuar com o envio de feedback
        $request->validate([
            'mensagem' => 'required|string|max:2000',
        ]);

        Feedback::create([
            'user_id' => auth()->id(),  // Obtém o ID do usuário logado
            'mensagem' => $request->mensagem,
        ]);

        return redirect()->route('feedback.show')->with('success', 'Mensagem enviada com sucesso!');


}
}
