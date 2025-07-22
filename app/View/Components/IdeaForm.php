<?php

namespace App\View\Components;

use App\Models\Idea;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class IdeaForm extends Component
{
    public $id;
    public $title;
    public $text;

    public function index () {
        // If there is an id, return edit otherwise return create
        /*
        if (!empty($this->$id)) {
            return view('edit');
        }
        else {
            return view('create');
        }
            */
    }

    public function store () {
        $idea = !empty($this->id) ? Idea::find($this->id) : new Idea();
        $idea->title = $this->title;
        $idea->text = $this->text;
        $idea->save();
    }


    public function render()
    {
        return view('components.idea-form');
    }
}
