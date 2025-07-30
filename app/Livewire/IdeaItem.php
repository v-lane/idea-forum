<?php

namespace App\Livewire;

use App\Models\Idea;
use App\Models\Like;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class IdeaItem extends Component
{
    public $idea;
    public $ideaId;

    public $border;
    public $singleIdea = false;
    public $shortText = false;

    public function toIdea () {
        $this->redirect("/idea/$this->ideaId");
    }

    public function mount(){
        if(!$this->singleIdea && strlen($this->idea['text']) < 125){
            $this->shortText = true;
        }
        else{
            $this->shortText = false;
        }
    }

    public function render()
    {
        return view('livewire.idea-item');
    }
}
