<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;

    //pivot: O Laravel utiliza a propriedade pivot para acessar os campos da tabela pivô (quantidade e preco).
    public function pedidos()
    {
        return $this->belongsToMany(Pedido::class)->withPivot('quantidade', 'preco')->withTimestamps();
    }

    protected $fillable =[
        'nome',
        'ingredientes',
        'valor',
        'imagem'
    ];
}
