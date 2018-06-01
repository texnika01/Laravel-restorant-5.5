<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\PageModels\Blog;
use App\Models\PageModels\Category;
use App\Models\PageModels\Event;
use App\Models\PageModels\Menu;

/**
 * Class DashboardController.
 */
class DashboardController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
    	$menu = Menu::where('active',1)->get();
    	$event = Event::where('active',1)->get();
		$blog = Blog::where('active', 1)->get();
		$category = Category::where('active', 1)->get();
        return view('backend.dashboard',compact('menu','event','blog','category'));
    }
}
