<?php

namespace App\Livewire;

use Livewire\Component;

class IdeaSection extends Component
{
        public $ideas = [
        [
            "ideaId" => 1,
            "username" => "Fred Johnson",
            "date" => "January 15, 2025",
            "title" => "This is the Title",
            "body" => "This is hardcoded content in the controller. To be replaced by comment text. The header of this comment card is hardcoded with the initials of the use - update with initials of user that created comment.",
            "numLikes" => 5000,
            "numComments" => 15
        ],
            [
            "ideaId" => 2,
            "username" => "Fred Johnson",
            "date" => "January 15, 2025",
            "title" => "This is the Title",
            "body" => "This is hardcoded content in the controller. To be replaced by comment text. The header of this comment card is hardcoded with the initials of the use - update with initials of user that created comment.",
            "numLikes" => 15,
            "numComments" => 50
        ],
        [
            "ideaId" => 3,
            "username" => "John Fredson",
            "date" => "January 15, 2025",
            "title" => "This is the Title",
            "body" => "This is hardcoded content in the controller. To be replaced by comment text. The header of this comment card is hardcoded with the initials of the use - update with initials of user that created comment.",
            "numLikes" => 543,
            "numComments" => 6
        ],
              [
            "ideaId" => 4,
            "username" => "John Fredson",
            "date" => "January 15, 2025",
            "title" => "This is the Title",
            "body" => "This is hardcoded content in the controller. To be replaced by comment text. The header of this comment card is hardcoded with the initials of the use - update with initials of user that created comment.",
            "numLikes" => 1463,
            "numComments" => 7
        ]
    ];
    public function render()
    {
        return view('livewire.idea-section');
    }
}
