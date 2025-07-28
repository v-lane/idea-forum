<?php

namespace App\Livewire;

use Livewire\Component;

class CommentSection extends Component
{
    public $comments;

    public function render()
    {
        return view('livewire.comment-section');
    }
}
