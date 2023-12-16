<?php

namespace App\Livewire;

use App\Models\App;
use GuzzleHttp\Client;
use Illuminate\Support\Str;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class Dashboard extends Component
{
    use LivewireAlert;
    public $appName;
    public $apps;
    public $soketi_running;
public function mount(){
    $this->appName = Str::random(10);
    //guzzle request
    $soketi_url = 'http://localhost:6001';
    $client = new Client();
    //check if possible to connect to server or not
    try {
        $response = $client->request('GET', $soketi_url);
        $this->soketi_running = true;
    } catch (\Exception $e) {
        $this->soketi_running = false;
    }
}
    public function saveApp(){
        $this->validate([
            'appName' => 'required|min:6'
        ]);

        $app = App::create([
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
        $this->redirect('/app/'.$app->id, navigate: true);

    }
    public function render()
    {
        $this->apps = App::all();
        return view('livewire.dashboard');
    }
}
