<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contato; // ou Feedback

class ContatoController extends Controller
{
    public function show()
    {
        return view('contato');
    }

    public function store(Request $request)
    {
            // Validação
            $request->validate([
                'mensagem' => 'required|string|max:2000',
            ]);

            // Criação do feedback, considerando que o usuário pode não estar logado
            Feedback::create([
                'user_id' => auth()->check() ? auth()->id() : null,  // Se estiver logado, usa o ID do usuário; caso contrário, usa null
                'mensagem' => $request->mensagem,
            ]);

            return redirect()->route('feedback.show')->with('success', 'Mensagem enviada com sucesso!');
        }

    }

