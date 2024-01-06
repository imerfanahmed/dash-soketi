<?php

namespace App\Livewire;

use Livewire\Component;

class App extends Component
{
    public $id;
    public $app;
    public $listeners = [ 'appUpdated' => 'mount' ];
    public function mount(){
        $this->app = \App\Models\App::findOrFail($this->id);
    }
    public function render()
    {
        return view('livewire.app');
    }
}
