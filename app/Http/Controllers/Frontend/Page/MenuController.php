<?php

namespace App\Http\Controllers\Frontend\Page;

use App\Models\PageModels\Menu;
use App\Http\Controllers\Controller;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexclasic()
    {
        $menu = Menu::where('active', 1)
				->orderBy('created_at','desc')
				->paginate(10);
        return view('frontend.menu.index_clasic',compact('menu'));
    }

	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function indextogle()
	{
		$menu = Menu::where('active', 1)
			->orderBy('created_at','desc')
			->paginate(10);
		return view('frontend.menu.index_togle',compact('menu'));
	}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $menu = Menu::where('id' , '=', $id)->firstOrFail();
        return view('frontend.menu.show',compact('menu'));
    }

}
