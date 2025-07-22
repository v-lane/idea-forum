<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Button extends Component
{

    public $text;
    public $variant;
    public $color;
    /**
     * Create a new component instance.
     */
    public function __construct($text = "Button", $variant = "primary", $color = "pink")
    {
        $this->text = $text;
        $this->variant = $variant;
        $this->color = $color;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.button');
    }
}
