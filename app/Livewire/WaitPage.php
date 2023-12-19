<?php

namespace App\Livewire;

use Livewire\Component;

class WaitPage extends Component
{
    public function render()
    {
        return view('livewire.wait-page')->layout('layouts.base');
    }
}
