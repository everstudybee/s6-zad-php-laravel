<?php

namespace App\Http\Controllers;

use App\Models\InternalEvent;
use Illuminate\Http\Request;

class InternalEventsController extends Controller
{
    public function index()
    {
        $internalEvents = InternalEvent::all();
        return view("internalEvents.index", ['internalEvents' => $internalEvents]);
    }

    /**
     * Zwraca widok edycji.
     */
    public function edit($id)
    {
        $internalEvent = InternalEvent::find($id);
        return view('internalEvents.edit', ['internalEvent' => $internalEvent]);
    }

    /**
     * Zapisuje zmiany w bazie danych
     */
    public function update(Request $request, $id)
    {
        $internalEvent = InternalEvent::find($id);
        $internalEvent->Title = $request->input('Title');
        $internalEvent->Link = $request->input('Link');
        $internalEvent->ShortDescription = $request->input('ShortDescription');
        $internalEvent->ContentHTML = $request->input('ContentHTML');
        $internalEvent->save();
        return redirect("/wydarzenia-wewnetrzne");
    }

    /**
     * Zwraca widok dodawania
     */
    public function create()
    {
        return view('internalEvents.create');
    }

    public function addToDB(Request $request)
    {
        $internalEvent = new InternalEvent();
        $internalEvent->Id = null;
        $internalEvent->Title = $request->input('Title');
        $internalEvent->Link = $request->input('Link');
        $internalEvent->ShortDescription = $request->input('ShortDescription');
        $internalEvent->ContentHTML = $request->input('ContentHTML');
        $internalEvent->IsPublic = true;
        $internalEvent->IsCancelled = false;
        $internalEvent->save();
        return redirect("/wydarzenia-wewnetrzne");
    }
}
