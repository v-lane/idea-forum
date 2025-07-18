<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SpotlightWrapper extends Component
{
    public $idea = [
            "ideaId" => 1,
            "username" => "Fred Johnson",
            "date" => "January 15, 2025",
            "title" => "This is the Title",
            "body" => "This is hardcoded content in the controller. To be replaced by comment text. The header of this comment card is hardcoded with the initials of the use - update with initials of user that created comment.",
            "numLikes" => 5000,
            "numComments" => 15
    ];
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.spotlight-wrapper');
    }
}
