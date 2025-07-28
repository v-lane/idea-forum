<?php

namespace App\Livewire;

use App\Models\Idea;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\On;
use Livewire\Component;

use function Laravel\Prompts\clear;

class IdeaSection extends Component
{
    public $hasHeader = false;
    public $hasIdeaCount = false;
    public $ideaCount;

    public $ideas;

     #[On('show')]
    public function show ($id)
    {
        // get single idea
        return $this->redirect("idea/".$id);
    }

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
