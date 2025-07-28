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
        $this->idea = Idea::withCount('likes')->orderBy('likes_count', 'desc')->first();
    }
    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.spotlight-wrapper');
    }
}
