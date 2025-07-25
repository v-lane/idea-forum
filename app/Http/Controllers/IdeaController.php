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
        return view('edit');
    }

    /*
    public function store (Request $request) {
        $request->validate([
            'title' => 'required|max:255',
            'text' => 'required'
        ]);

        $idea = !empty($request->id) ? Idea::find($request->id) : new Idea();
        $idea->title = $request->input('title');
        $idea->text = $request->input('text');
        // Include num_comments, likes and timestamp?
        $idea->save();

        return redirect()->back();
    }
    */
}
