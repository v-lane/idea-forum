<?php

namespace App\Livewire;

use Livewire\Component;

class IdeaForm extends Component
{
    public $id;
    public $title;
    public $text;

    // Save function

    public function render()
    {
        return view('livewire.idea-form');
    }
}
