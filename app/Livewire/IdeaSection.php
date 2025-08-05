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
    public $search = '';

    public $ideas;

    public $idea;
    public $isSingleIdea = false;

    public function mount()
    {
        if(!$this->isSingleIdea)
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
    }
    #[On('refresh')]
    public function refresh () {
        if($this->isSingleIdea)
        {
            $this->idea = Idea::findOrFail($this->idea['id']);
        } else {
            if(!Auth::check() || $this->hasHeader){
                $this->ideas = Idea::orderBy('created_at', 'desc')->get();
                $this->ideaCount = count($this->ideas);
            } else {
                $this->ideas = Idea::where('user_id', Auth::id())->orderBy('created_at', 'desc')->get();
                $this->ideaCount = count($this->ideas);
            }
        }
    }

    public function updatedSearch () {
    $this->ideas = Idea::orderByDesc('created_at')
        ->where('title', 'like', "%{$this->search}%")
        ->orWhere('text', 'like', "%{$this->search}%")
        ->get();
    }

    public function render()
    {
        return view('livewire.idea-section');
    }
}
