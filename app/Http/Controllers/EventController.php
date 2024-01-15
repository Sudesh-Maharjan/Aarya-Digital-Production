<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EventController extends Controller
{
    /**
     * Display a listing of events.
     *
     * @return \Illuminate\Http\Response
     */
    public function adminshowevent()
{
    $events = Event::all();
    return view('admin.events.ShowEvent', compact('events'));
}
    public function admincreate()
    {
        return view('admin.events.CreateEvent');
    }
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'title' => 'required',
            'description' => 'required',
        ]);

        $imagePath = $request->file('image')->store('event_images', 'public');
        $imageName = basename($imagePath);

        Event::create([
            'image' => $imageName,
            'title' => $request->input('title'),
            'description' => $request->input('description'),
        ]);

        return redirect()->route('admin.events.createevent')->with('success', 'Event created successfully');
    }
    public function showEvents()
    {
        // Mock data for events
        $events = Event::all();

        // Pass the events data to the view
        return view('events', ['events' => $events]);
    }
    public function showEventDetails($id)
    {
      
        $event = Event::find($id);
    
      
        if (!$event) {
            abort(404); 
        }
    
       
        return view('eventdetails', ['event' => $event]);
    }
    public function edit($id)
    {
        $event = Event::find($id);

        if (!$event) {
            abort(404); 
        }

        return view('admin.events.EditEvent', compact('event'));
    }

 function update(Request $request, $id)
    {
        $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'title' => 'required',
            'description' => 'required',
        ]);

        $event = Event::find($id);

        if (!$event) {
            abort(404);
        }

        // Update event details
        $event->title = $request->input('title');
        $event->description = $request->input('description');

        // Update image if a new image is provided
        if ($request->hasFile('image')) {
            // Delete old image
            Storage::disk('public')->delete('event_images/' . $event->image);

            // Store new image
            $imagePath = $request->file('image')->store('event_images', 'public');
            $event->image = basename($imagePath);
        }

        $event->save();

        return redirect()->route('admin.events.showevent')->with('success', 'Event updated successfully');
    }
}
