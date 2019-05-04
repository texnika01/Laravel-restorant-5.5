<?php

namespace App\Http\Controllers\Backend\Page;

use App\Http\Requests\Backend\PageRequest\EventRequest;
use App\Models\PageModels\Event;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class EventController extends Controller
{
    protected $event;

    public function __construct(Event $event)
    {
        $this->event = $event;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$data = $this->event->where('active', 1)->orderBy('created_at','desc')->get();
        return view('backend.event.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.event.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
		$data = $request->validate([
			'name' => 'required|min:6|max:20|unique:events',
			'date' => 'required|date_format:Y-m-d',
            'text' =>  'required|min:6|max:255',
            'image' => 'mimes:jpeg',
		]);
        //dd($data);
        $data = $request->except('image');
		$fileName = rand(11111111, 99999999) . '.' . $request->file('image')->getClientOriginalExtension(); // renameing image
		$request->file('image')->move(public_path('upload/event_image'), $fileName);
		$data['image'] = $fileName;
        //dd($data);
        $this->event->create($data);
		return redirect()->route('admin.event')->withFlashSuccess('Event Upload Succesfull');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = $this->event->where('id','=',$id)->firstOrFail();
        return view('backend.event.show',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = $this->event->where('id','=',$id)->firstOrFail();
        return view('backend.event.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
