<?php

namespace App\Livewire;

use Livewire\Component;

class Overview extends Component
{
    public $app;

//    public function mount(){
//       $this->app =  collect($this->app)->except(['name','id','secret','key','webhooks','created_at','updated_at']);
//    }
    public function render()
    {
        return view('livewire.overview');
    }
}
