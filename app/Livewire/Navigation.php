<?php

namespace App\Livewire;

use GuzzleHttp\Client;
use Livewire\Component;

class Navigation extends Component
{
    public $soketi_running;

    public function mount(){
        //guzzle request

        $soketi_url = config('soketi.soketi_scheme') . '://' . config('soketi.soketi_host') . ':' . config('soketi.soketi_port');
        ray($soketi_url);
        $client = new Client();
        //check if possible to connect to server or not
        try {
            $response = $client->request('GET', $soketi_url);
            $this->soketi_running = true;
        } catch (\Exception $e) {
            $this->soketi_running = false;
        }
    }
    public function render()
    {
        return view('livewire.navigation');
    }
}
