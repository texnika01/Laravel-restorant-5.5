<?php

namespace App\Http\Controllers\Frontend\Page;

use App\Models\PageModels\Menu;
use App\Models\PageModels\Menucategory;
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
        $menucat = Menucategory::where('active', 1)
                ->orderBy('created_at', 'desc')
                ->paginate(10);

        $menu = Menu::where('active', 1)
                ->orderBy('created_at','desc')
                ->paginate(10);
        return view('frontend.menu.index_clasic',compact('menu','menucat'));
    }

	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function indextogle()
	{
        $menucat = Menucategory::where('active', 1)
                ->orderBy('created_at', 'desc')
                ->paginate(10);
		$menu = Menu::where('active', 1)
			->orderBy('created_at','desc')
			->paginate(10);
		return view('frontend.menu.index_togle',compact('menu','menucat'));
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
