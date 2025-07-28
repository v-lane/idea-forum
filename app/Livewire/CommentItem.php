<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class CommentItem extends Component
{
    public $userId;
    public $username;
    public $body;
    public $date;



    public function mount()
    {
        $this->username = User::find($this->userId,'username')->username;
    }

    public function render()
    {
        return view('livewire.comment-item');
    }
}
