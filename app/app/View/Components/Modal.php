<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Modal extends Component
{
    public int $index;
    public string $titulo;
    public string $imagem;
    public string $descricao;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(int $index, string $titulo, string $imagem, string $descricao)
    {
        $this->index = $index;
        $this->imagem = $imagem;
        $this->titulo = $titulo;
        $this->descricao = $descricao;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.modal');
    }
}
