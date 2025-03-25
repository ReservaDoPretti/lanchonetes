<div>
    <h2>Meus Pedidos</h2>

    @forelse ($pedidos as $pedido)
        <div class="pedido">
            <p><strong>Data:</strong> {{ $pedido->created_at }}</p>
            <p><strong>Status:</strong> {{ $pedido->status }}</p>
            <p><strong>Valor Total:</strong> R$ {{ number_format($pedido->valor_total, 2, ',', '.') }}</p>

            <h4>Produtos:</h4>
            <ul>
                @foreach ($pedido->produtos as $produto)
                    <li>{{ $produto->nome }} - Quantidade: {{ $produto->pivot->quantidade }} - Preço: R$ {{ number_format($produto->pivot->preco, 2, ',', '.') }}</li>
                @endforeach
            </ul>
        </div>
    @empty
        <p>Você não fez nenhum pedido ainda.</p>
    @endforelse
</div>
