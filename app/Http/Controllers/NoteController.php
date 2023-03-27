<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Note;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NoteController extends Controller
{
    public function dashboard()
    {
        $note_count = Note::where('user_id', Auth::user()->id)->get()->count();

        return view('user.index', [
            'title' => "Dashboard",
            'note_count' => $note_count
        ]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $notes = Note::where('user_id', Auth::user()->id)->latest()->get();

        //dd($notes);
        return view('user.note.index', [
            'title' => "All Notes",
            'notes' => $notes
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.note.create', [
            'title' => "Create Note"
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $request->validate([
            'title' => 'required',
            'body' => 'required'
        ]);

        //eloquent ORM for saving data
        $note = new Note();
        $note->user_id = Auth::user()->id;
        $note->title = $request->title;
        $note->body = $request->body;
        $note->save();

        /**
         * equivalent to:
         * INSERT INTO notes (user_id, title, body)
         * VALUES (1, titleVal, bodyVal);
         */

        return redirect()->back()->with('success', "Note added successfully");
    }

    /**
     * Display the specified resource.
     */
    public function show(Note $note)
    {
        $note = Note::findOrFail($note->id);

        if ($note->user_id != Auth::user()->id) {
            abort(401);
        } else {
            $note['date'] = $note->updated_at != null ? $note->updated_at : $note->created_at;
            $note['date'] = Carbon::createFromFormat('Y-m-d H:i:s', $note['date'])->diffForHumans();
            return response()->json($note);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Note $note)
    {
        $current_note = Note::findOrFail($note->id);

        if ($note->user_id != Auth::user()->id) {
            abort(401);
        } else {
            return view('user.note.edit', [
                'title' => "Edit Note",
                'note' => $current_note
            ]);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Note $note)
    {
        $request->validate([
            'title' => 'required',
            'body' => 'required'
        ]);

        if ($note->user_id != Auth::user()->id) {
            abort(401);
        } else {
            Note::where('id', $note->id)->update([
                'title' => $request->title,
                'body' => $request->body,
            ]);

            return redirect()->back()->with('success', "Note updated successfully");
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Note $note)
    {
        $note = Note::findOrFail($note->id);

        if ($note->user_id != Auth::user()->id) {
            abort(401);
        } else {
            $note->delete();
            return redirect()->back()->with('success', "Note deleted successfully");
        }
    }
}
