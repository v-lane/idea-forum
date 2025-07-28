<?php

namespace App\Http\Controllers;

use App\Models\Idea;
use Illuminate\Http\Request;

class IdeaController extends Controller
{
    public function index(){
        return view('welcome', ['ideas' => Idea::all()]);
    }

    public function indexCreate () {
        return view('create');
    }

    public function indexEdit (string $id) {
        // use id
        return view('edit');
    }

    public function indexIdea (Request $request)
    {
        if (isset($request['id']))
        {
            return view('idea', ['idea' => Idea::findOrFail($request['id'])]);
        }
    }

    public function store (Request $request) {
        $request->validate([
            'title' => 'required|max:255|min:2',
            'words' => 'required|min:4'
        ]);

        $idea = !empty($request->id) ? Idea::find($request->id) : new Idea();
        $idea->title = $request->input('title');
        $idea->text = $request->input('text');
        // Include timestamp?
        $idea->save();

        return redirect('/dashboard');
    }
}
