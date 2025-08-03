<?php

namespace App\Http\Controllers;

use App\Models\Idea;
use Illuminate\Http\Request;

class IdeaController extends Controller
{

    public function index(Request $request) {
        if(isset($request['search'])) {
            return view('welcome', ['ideas' =>
                Idea::where('title', 'like', "%{$request['search']}%")
                ->orWhere('text','like',"%{$request['search']}%")
                ->get()
            ]);
        }
        return view('welcome', ['ideas' => Idea::orderBy('created_at', 'desc')->get()]);

        // return view('welcome', ['ideas' => Idea::all()]);
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
            $idea = Idea::findOrFail($request['id']);
            $comments = $idea->comments()->orderBy('created_at', 'desc')->get();
            return view('idea', ['idea' => $idea, 'comments' => $comments]);
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
