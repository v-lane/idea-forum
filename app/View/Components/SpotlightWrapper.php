<?php

namespace App\View\Components;

use App\Models\Idea;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SpotlightWrapper extends Component
{
    
     public $idea;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        // currently hardcoded to take the first idea, not most liked
        $this->idea = Idea::find(1);
    }
    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.spotlight-wrapper');
    }
}
