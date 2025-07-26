<?php

namespace App\Livewire;

use Livewire\Component;

class IdeaItem extends Component
{
    public $idea;
    public $border;
    public $singleIdea = false;


    public function render()
    {
        return view('livewire.idea-item');
    }
}
