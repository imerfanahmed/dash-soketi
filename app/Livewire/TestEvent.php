<?php

namespace App\Livewire;

use Livewire\Component;

class TestEvent extends Component
{
    public $message;

    public function render()
    {
        $message = $this->message;
        event(new \App\Events\TestEvent($message));
        return response()->json(['status' => 'Message sent!']);
    }
}
