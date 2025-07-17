<?php

namespace App\Livewire;

use Livewire\Component;

class CommentSection extends Component
{
    public $comments = [
        [
            "userId" => 1,
            "username" => "Fred Johnson",
            "body" => "This is hardcoded content in the controller. To be replaced by comment text. The header of this comment card is hardcoded with the initials of the use - update with initials of user that created comment."
        ],
        [
            "userId" => 2,
            "username" => "John Fredson",
            "body" => "This is hardcoded content in the controller. To be replaced by comment text. The header of this comment card is hardcoded with the initials of the use - update with initials of user that created comment."
        ],
        [
            "userId" => 3,
            "username" => "Lauren McDonald",
            "body" => "This is hardcoded content in the controller. To be replaced by comment text. The header of this comment card is hardcoded with the initials of the use - update with initials of user that created comment."
        ],
        [
            "userId" => 4,
            "username" => "Donald McDonald",
            "body" => "This is hardcoded content in the controller. To be replaced by comment text. The header of this comment card is hardcoded with the initials of the use - update with initials of user that created comment."
        ]
    ];

    public function render()
    {
        return view('livewire.comment-section');
    }
}
