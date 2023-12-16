<?php

namespace App\Livewire;

use Livewire\Component;
use function Termwind\render;

class App extends Component
{
    public $id;
    public $app;
    public function mount(){
        $this->app = \App\Models\App::findOrFail($this->id);
    }
    public function render()
    {
        return view('livewire.app');
    }
}
