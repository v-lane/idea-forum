<?php

namespace App\Livewire;

use App\Models\Idea;
use Livewire\Component;

class IdeaSection extends Component
{
    public $hasHeader = false;
    public $hasIdeaCount = false;
    public $ideaCount;

    public $ideas;

    public function mount()
    {
        $this->ideas = Idea::orderBy('created_at', 'desc')->get();
        $this->ideaCount = count($this->ideas);
    }

    public function render()
    {
        return view('livewire.idea-section');
    }
}
