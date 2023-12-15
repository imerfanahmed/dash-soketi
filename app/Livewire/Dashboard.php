<?php

namespace App\Livewire;

use App\Models\App;
use Illuminate\Support\Str;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class Dashboard extends Component
{
    use LivewireAlert;
    public $appName;
    public $apps;
    protected $listeners = ['closeModal' => '$refresh'];
public function mount(){
    $this->appName = Str::random(10);
}
    public function saveApp(){
        //dd($this->appName);
        $this->validate([
            'appName' => 'required|min:6'
        ]);

        App::create([
            'name' => $this->appName,
            'key' => Str::random(10),
            'secret' => Str::random(10)
        ]);
        $this->alert('success', 'App Created Successfully', [
            'position' =>  'top-end',
            'timer' =>  3000,
            'toast' =>  true,
            'text' =>  '',
            'confirmButtonText' =>  'Ok',
            'cancelButtonText' =>  'Cancel',
            'showCancelButton' =>  false,
            'showConfirmButton' =>  false,
        ]);

        //emit event for closing modal
        $this->dispatch('closeModal');



    }
    public function render()
    {
        $this->apps = App::all();
        return view('livewire.dashboard');
    }
}
