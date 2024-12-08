<form action="{{ route('feedback.store') }}" method="POST">
    @csrf
    <textarea name="mensagem" placeholder="Digite sua mensagem" required></textarea>
    <button type="submit">Enviar Mensagem</button>
</form>
