<?php

namespace App\Livewire;

use Livewire\Attributes\Modelable;
use Livewire\Component;

class Search extends Component
{
     #[Modelable]
    public $search = '';

    public function render()
    {
        return view('livewire.search');
    }
}
