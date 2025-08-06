<?php

namespace App\Livewire;

use App\Models\Comment;
use Livewire\Attributes\On;
use Livewire\Component;

class CommentSection extends Component
{
    public $comments;
    public $ideaId;

    public function mount () {
        if(empty($this->comments))
        {
            $this->comments = Comment::where('idea_id', $this->ideaId)->orderBy('created_at', 'desc')->get();
        }
    }

    #[On('refresh')]
    public function refresh () {
        $this->comments = Comment::where('idea_id', $this->ideaId)->orderBy('created_at', 'desc')->get();
    }

    public function render()
    {
        return view('livewire.comment-section');
    }
}
