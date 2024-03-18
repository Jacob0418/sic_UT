<?php

namespace App\Livewire\Examples;

use Livewire\Component;

class Example1 extends Component
{
    public $title = 'Mi primer componente Livewire';
    public function render()
    {
        return view('livewire.examples.example1');
    }

    public function cambiarTitulo()
    {
        $this->title = 'Cambiando...';
    }
}
