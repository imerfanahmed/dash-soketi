<?php

namespace App\Livewire;

use Illuminate\Http\File;
use Livewire\Component;

class Debug extends Component
{

    public function clearDebugFile(): void {
        //delete debug file
        unlink(public_path('debug.txt'));
        //create a new debug file
        $file = fopen(public_path('debug.txt'), 'w');
    }
    public function render()
    {
        $file = fopen(public_path('debug.txt'), 'r');
        $content = fread($file, filesize(public_path('debug.txt')));
        fclose($file);

        return view('livewire.debug',[
            'content' => $content
        ]);
    }
}
