<?php

namespace App\Livewire;

use Livewire\Component;

class CommentItem extends Component
{
    public $userId;
    public $username = "Fred Johnson";
    public $body = "This is hardcoded content in the controller. To be replaced by comment text. The header of this comment card is hardcoded with the initials of the use - update with initials of user that created comment.";
    public $date = "January 15, 2025";



    public function mount()
    {
        $this->userId = random_int(1, 100);
    }

    public function render()
    {
        return view('livewire.comment-item');
    }
}
