<?php

namespace App\Livewire;

use App\Models\Idea;
use Livewire\Attributes\On;
use Livewire\Component;

class SpotlightWrapper extends Component
{

    public $idea;

    #[On('refresh')]
    public function refresh() {
        $this->idea = Idea::withCount('likes')->orderBy('likes_count', 'desc')->first();

    }

    public function mount() {
        $this->refresh();
    }

    public function render()
    {
        return view('livewire.spotlight-wrapper');
    }
}
