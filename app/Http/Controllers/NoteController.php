<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Note;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NoteController extends Controller
{
    /**
     * dashboard
     */
    public function dashboard()
    {
        return view('user.index', [
            'title' => "Dashboard",
            'note_count' => Note::get()->count()
        ]);
    }

    /**
     * Display a listing of the resource.
     * 
     * The latest and oldest methods allow you to easily order results by date.
     */
    public function index()
    {
        $notes = Note::where([
            'user_id' => Auth::user()->id
        ])->latest()->get();

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

        $note = new Note();
        $note->title = $request->title;
        $note->body = $request->body;
        $note->user_id = Auth::user()->id;
        $note->created_at = date('Y-m-d H:i:s');
        $note->save();

        return redirect()->back()->with('success', "Note added successfully");

        // if (!empty($data['title'])) {

        //     $data['body'] = encrypt($request->body);
        //     $data['user_id'] = Auth::user()->id;

        //     $this->noteModel->note_store($data);

        //     return redirect()->back()->with('success', "Note added successfully");
        // } else {
        //     return redirect()->back()->with('error', "Title field must not be empty")->withInput();
        // }

    }

    /**
     * Display the specified resource.
     */
    public function show(Note $note)
    {
        $note = Note::find($note->id);

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
        //dd("edit" . $note->id);
        if ($note->user_id != Auth::user()->id) {
            abort(401);
        } else {
            return view('user.note.edit', [
                'title' => "Edit Note",
                'note' => $note
            ]);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Note $note)
    {
        //dd($request->except(['_token', '_method']));
        //dd($note->id);
        $request->validate([
            'title' => 'required',
            'body' => 'required'
        ]);

        Note::where('id', $note->id)->update([
            'title' => $request->title,
            'body' => $request->body,
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        return redirect()->back()->with('success', "Note updated successfully");
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
