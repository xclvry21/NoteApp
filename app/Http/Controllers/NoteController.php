<?php

namespace App\Http\Controllers;

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
            'title' => "Dashboard"
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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Note $note)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Note $note)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Note $note)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Note $note)
    {
        //
    }
}
