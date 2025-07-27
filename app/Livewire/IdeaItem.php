<?php

namespace App\Livewire;

use App\Models\Idea;
use App\Models\User;
use Livewire\Component;

class IdeaItem extends Component
{
    // public $idea;
    // Adding props individually...
    // May edit/remove once I figure out how to set up properly!
    public $ideaId;
    public $ideaTitle;
    public $ideaText;
    public $numLikes;
    public $numComments;

    public $username;
    public $userId;
    public $createDate;
    public $editDate;

    public $border;
    public $singleIdea = false;

    public function mount(){
        if(!$this->singleIdea){
            $this->ideaText = substr($this->ideaText, 0, 50) . '...';
        }
    }

    public function render()
    { 
        return view('livewire.idea-item');
    }
}
