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
        
        $idea = !empty($this->id) ? Idea::find($this->id) : new Idea();
        $idea->title = $this->title;
        $idea->text = $this->text;
        $idea->user_id = Auth::id();
        $idea->save();
        
        $this->dispatch('saved');
        Flux::modals()->close(); 
        // Needs to be a 'saved' somewhere to trigger refresh (In livenote, livenote.blade.php has 
        // <livewire:note-form :key="$this->noteFormId" :$id :$title :$text @saved="refresh" />)
    }

    public function render()
    {
        return view('livewire.idea-form');
    }
}
