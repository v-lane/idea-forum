<?php

namespace App\Livewire;

use App\Models\Idea;
use Flux\Flux;
use Livewire\Component;

class DeleteAlert extends Component
{
    public $id;
    public $formId;
    public $singleIdea;

    public function destroy () {
        $idea = Idea::find($this->id);
        $idea->delete();
        $this->dispatch('deleted');
        Flux::modals()->close();

        if($this->singleIdea){
            $this->redirect('/dashboard');
        }
    }

    public function render()
    {
        return view('livewire.delete-alert');
    }
}
