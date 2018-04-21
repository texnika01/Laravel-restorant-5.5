<?php

namespace App\Http\Controllers\Frontend\Page;

use App\Models\PageModels\Event;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$event = Event::where('active',1)
			->orderBy('created_at','desc')
			->paginate(10);
        return view('frontend.event.index',compact('event'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Event $id)
    {
        $event = Event::where('id', '=', $id)->firstOrFail();
        return view('frontend.event.show',compact('event'));
    }

}
