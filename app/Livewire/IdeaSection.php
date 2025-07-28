<?php

namespace App\Livewire;

use App\Models\Idea;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class IdeaSection extends Component
{
    public $hasHeader = false;
    public $hasIdeaCount = false;
    public $ideaCount;

    public $ideas;

    public function mount()
    {
        if(!Auth::check() || $this->hasHeader){
            $this->ideas = Idea::orderBy('created_at', 'desc')->get();
            $this->ideaCount = count($this->ideas);
        }
        else{
            $this->ideas = Idea::where('user_id', Auth::id())->orderBy('created_at', 'desc')->get();
            $this->ideaCount = count($this->ideas);
        }
    }

    public function render()
    {
        return view('livewire.idea-section');
    }
}
