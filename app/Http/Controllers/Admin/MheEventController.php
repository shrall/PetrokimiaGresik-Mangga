<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\MheEvent;
use Illuminate\Http\Request;

class MheEventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = MheEvent::all();
        return view('admin.mhe_event.index', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.mhe_event.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        MheEvent::create([
            'name' => $request->name,
            'start' => $request->start,
            'end' => $request->end,
            'desc' => $request->desc,
            'status' => $request->status
        ]);

        return redirect()->route('admin.mhe_event.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MheEvent  $mheEvent
     * @return \Illuminate\Http\Response
     */
    public function show(MheEvent $mheEvent)
    {
        return view('admin.mhe_event.show', compact('mheEvent'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MheEvent  $mheEvent
     * @return \Illuminate\Http\Response
     */
    public function edit(MheEvent $mheEvent)
    {
        return view('admin.mhe_event.edit', compact('mheEvent'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MheEvent  $mheEvent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MheEvent $mheEvent)
    {
        $mheEvent->update([
            'name' => $request->name,
            'start' => $request->start,
            'end' => $request->end,
            'desc' => $request->desc,
            'status' => $request->status
        ]);

        return redirect()->route('admin.mhe_event.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MheEvent  $mheEvent
     * @return \Illuminate\Http\Response
     */
    public function destroy(MheEvent $mheEvent)
    {
        $mheEvent->delete();
        return redirect()->route('admin.mhe_event.index');
    }
}
