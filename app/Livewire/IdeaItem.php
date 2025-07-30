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

    public $userLiked;

    public function toIdea () {
        $this->redirect("/idea/$this->ideaId");
    }

    public function likeIdea () {
        if(Auth::check() && !Like::where('user_id','=',Auth::id())->where('idea_id','=',$this->ideaId)->first()) {
            $like = new Like();
            $like->idea_id = $this->ideaId;
            $like->user_id = Auth::id();
            $like->save();

            $this->userLiked = true;

            $this->refresh();
        }



    }

    public function refresh()
    {
        $this->dispatch('refresh');
    }

    public function mount(){
        if(!$this->singleIdea && strlen($this->idea['text']) < 125){
            $this->shortText = true;
        }else{
            $this->shortText = false;
        }
        if($this->userLiked != null) {
            $this->userLiked = true;
        } else {
            $this->userLiked - false;
        }
    }

    public function render()
    {
        return view('livewire.idea-item');
    }
}
