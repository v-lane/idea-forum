<?php

namespace App\Livewire;

use App\Models\Comment;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class CommentForm extends Component
{
    public $commentText;
    public $ideaId;

    public function save() {
        $this->validate([
            'commentText' => 'required|min:10'
        ]);

        $comment = new Comment();
        $comment->text = $this->commentText;
        $comment->user_id = Auth::id();
        $comment->idea_id = $this->ideaId;
        $comment->save();


        $this->dispatch('saved');
        $this->commentText = "";
    }

    public function render()
    {
        return view('livewire.comment-form');
    }
}
