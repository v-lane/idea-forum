<?php

namespace App\Livewire;

use App\Models\Idea;
use Flux\Flux;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class IdeaForm extends Component
{
    public $id;
    public $title;
    public $text;

    public $heading;
    public $formName;
    public $btnText;


    // Save function
    public function save () {

        $this->validate([
            'title' => 'required|max:255|min:2',
            'text' => 'required|min:4'
        ]);

        // if edit form and no changes to title, just close modal
        if(!empty($this->id)) {
            $idea = Idea::find($this->id);
            if ($this->title == $idea->title && $this->text == $idea->text) {
                Flux::modals()->close();
            } else {
                $idea = !empty($this->id) ? Idea::find($this->id) : new Idea();
                $idea->title = $this->title;
                $idea->text = $this->text;
                $idea->user_id = Auth::id();
                $idea->save();

                $this->dispatch('saved');
                Flux::modals()->close();
                $this->id = "";
                $this->title = "";
                $this->text = "";
                // Needs to be a 'saved' somewhere to trigger refresh (In livenote, livenote.blade.php has
                // <livewire:note-form :key="$this->noteFormId" :$id :$title :$text @saved="refresh" />)
            }
        }
    }

    public function render()
    {
        return view('livewire.idea-form');
    }
}
