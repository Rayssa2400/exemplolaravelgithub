@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Enviar Feedback</h1>

    <!-- Mensagem de sucesso ao enviar -->
    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <!-- Formulário para envio de novo feedback -->
    <form action="{{ route('feedback.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="mensagem" class="form-label">Sua mensagem:</label>
            <textarea name="mensagem" id="mensagem" class="form-control" rows="5" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>

    <hr>

    <h2>Mensagens Enviadas</h2>
    @if ($feedbacks->isEmpty())
        <p>Nenhuma mensagem enviada até o momento.</p>
    @else
        <!-- Listagem de feedbacks -->
        <ul class="list-group">
            @foreach ($feedbacks as $feedback)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <div>
                        <strong>{{ $feedback->user->nome ?? 'Usuário Desconhecido' }}</strong>
                        <p>{{ $feedback->mensagem }}</p>
                        <small class="text-muted">Enviado em {{ $feedback->created_at->format('d/m/Y H:i') }}</small>
                    </div>
                    <!-- Botões de ação (editar e deletar) -->
                    <div>
                        <a href="{{ route('feedback.edit', $feedback->id) }}" class="btn btn-sm btn-warning">Editar</a>
                        <form action="{{ route('feedback.destroy', $feedback->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Deseja realmente excluir este feedback?')">Excluir</button>
                        </form>
                    </div>
                </li>
            @endforeach
        </ul>
    @endif
</div>
@endsection
